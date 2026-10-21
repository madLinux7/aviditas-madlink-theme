#!/usr/bin/env python3
"""Deterministic release assets; never include repository tooling in runtime packages."""
import argparse,gzip,hashlib,io,json,pathlib,re,subprocess,tarfile
parser=argparse.ArgumentParser()
parser.add_argument('--tag',required=True)
parser.add_argument('--output',required=True)
args=parser.parse_args()
root=pathlib.Path(__file__).resolve().parent.parent
manifest=json.loads((root/'theme.json').read_text())
slug,version=manifest['slug'],manifest['version']
assert re.fullmatch(r'[a-z][a-z0-9]*(?:-[a-z0-9]+)*',slug)
assert re.fullmatch(r'\d+\.\d+\.\d+',version) and args.tag=='v'+version,'Tag/version mismatch'
assert manifest['repository_url']=='https://github.com/madLinux7/'+slug+'-madlink-theme'
tracked=subprocess.check_output(['git','ls-files','-z'],cwd=root).decode().split('\0')
selected=[]
for name in tracked:
    if name in ['theme.json','theme.blade.php','css.blade.php','LICENSE','NOTICE','AUTHORS','README.md'] or name.startswith(('assets/','partials/','LICENSES/')) or re.fullmatch(r'thumbnail\.(jpg|png|webp|gif)',name):
        assert not (root/name).is_symlink()
        selected.append(name)
assert all(name in selected for name in ['theme.json','theme.blade.php','css.blade.php','LICENSE'])
buffer=io.BytesIO()
files={}
with tarfile.open(fileobj=buffer,mode='w',format=tarfile.USTAR_FORMAT) as tar:
    for name in sorted(selected):
        content=(root/name).read_bytes();files[name]=hashlib.sha256(content).hexdigest()
        entry=tarfile.TarInfo(slug+'/'+name);entry.size=len(content);entry.mode=0o644;entry.mtime=0;entry.uid=entry.gid=0
        tar.addfile(entry,io.BytesIO(content))
output=pathlib.Path(args.output);output.mkdir(parents=True,exist_ok=True)
name=f'{slug}-{version}.tar.gz'
with (output/name).open('wb') as raw:
    with gzip.GzipFile(filename='',mode='wb',fileobj=raw,mtime=0,compresslevel=9) as compressed:compressed.write(buffer.getvalue())
digest=hashlib.sha256((output/name).read_bytes()).hexdigest()
(output/(name+'.sha256')).write_text(digest+'  '+name+'\n')
(output/(slug+'-'+version+'.files.json')).write_text(json.dumps(files,sort_keys=True,indent=2)+'\n')
print(name+' '+digest)
