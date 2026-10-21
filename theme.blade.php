<div class="madlink-page madlink-aviditas" data-preview-root data-preview-render="canonical"
    x-data="{
        avScrollY: 0,
        avProfileBottom: 0,
        avAlive: true,
        init() {
            this.$nextTick(() => { if (this.avAlive) this.avMeasure(); });
        },
        destroy() {
            this.avAlive = false;
            this.$refs.heroDarken.style.opacity = '';
            this.$root.querySelector('[data-preview-sticky-header]')?.classList.remove('av-sticky-visible');
        },
        avMeasure() {
            this.avProfileBottom = this.$refs.profile.offsetTop + this.$refs.profile.offsetHeight;
            this.avOnScroll();
        },
        avOnScroll() {
            this.avScrollY = window.scrollY;
            if (this.avProfileBottom > 0) {
                this.$refs.heroDarken.style.opacity = Math.min(this.avScrollY / (this.avProfileBottom * 0.8), 1) * 0.85;
            }
            this.$root.querySelector('[data-preview-sticky-header]')?.classList.toggle('av-sticky-visible', this.avScrollY > this.avProfileBottom * 0.75);
        }
    }" @scroll.window="avOnScroll()" @resize.window="avMeasure()">
    <div class="madlink-content">
        {{-- Sticky Header (appears on scroll) --}}
        @include('pages.components.sticky-header', ['page' => $page, 'profileImageUrl' => $profileImageUrl, 'isPreview' => $isPreview])

        {{-- Hero Profile Section --}}
        <div class="av-hero" x-ref="profile">
            @if($profileImageUrl || $isPreview)
                <img class="av-hero-img" data-preview-profile-image @if($profileImageUrl) src="{{ $profileImageUrl }}" @else hidden @endif
                    alt="{{ $page->title }}" loading="eager">
            @endif
            @if(! $profileImageUrl || $isPreview)
                <div class="av-hero-placeholder" data-preview-profile-placeholder @if($profileImageUrl) hidden @endif></div>
            @endif
            <div class="av-hero-overlay"></div>
            <div class="av-hero-darken" x-ref="heroDarken"></div>
            <div class="av-hero-info">
                <div class="av-title-wrapper">
                    <h1 class="av-title">
                        <span data-preview-title>{{ $page->title }}</span>
                    </h1>
                    @if($page->is_verified)
                        @include('pages.components.verified-badge', ['verified' => $page->is_verified, 'style' => 'primary', 'locale' => $locale])
                        {{-- TODO: more badges --}}
                    @endif
                </div>
                @if(($page->bio !== null && $page->bio !== '') || $isPreview)
                    <p class="av-bio" data-preview-bio @if($page->bio === null || $page->bio === '') hidden @endif>{!! nl2br(e($page->bio ?? '')) !!}</p>
                @endif

                {{-- Social Icons --}}
                @if($page->social_links && count($page->social_links) > 0)
                    @include('pages.components.social-icons', ['socialLinks' => $page->social_links, 'locale' => $locale, 'isPreview' => $isPreview])
                @endif

                {{-- Support Buttons --}}
                @if($page->support_links && count($page->support_links) > 0)
                    @include('pages.components.support-button', ['supportLinks' => $page->support_links, 'locale' => $locale, 'isPreview' => $isPreview])
                @endif
            </div>
        </div>

        {{-- Link Tile Grid --}}
        <div class="av-grid" data-preview-links data-preview-link-type="link_tile">
            @foreach($links as $link)
                @if($link->is_top)
                    @include('pages.components.link-tile-top', ['link' => $link, 'isPreview' => $isPreview])
                @else
                    @include('pages.components.link-tile', ['link' => $link, 'isPreview' => $isPreview])
                @endif
            @endforeach
        </div>
        @if($isPreview)
            <template data-preview-link-template="default">
                @include('pages.components.link-tile', ['link' => $previewTemplateLink, 'isPreview' => true])
            </template>
            <template data-preview-link-template="top">
                @include('pages.components.link-tile-top', ['link' => $previewTemplateLink, 'isPreview' => true])
            </template>
        @endif

        <x-legal.footer :page="$page" :legals="$legals" :locale="$locale" :is-preview="$isPreview" />
    </div>
</div>
