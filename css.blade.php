    .madlink-aviditas {
        font-family: var(--font-body);
        font-weight: var(--font-body-weight);
        font-style: var(--font-body-style);
        font-synthesis: var(--font-body-synthesis);
        color: #fff;
        min-height: 100vh;
        -webkit-font-smoothing: antialiased;
    }

    /* Background layers */
    .madlink-aviditas .av-bg-image {
        position: fixed;
        inset: 0;
        background-size: cover;
        background-position: center;
        filter: blur(20px);
        transform: scale(1.1);
        z-index: 0;
        transition: opacity 0.05s linear;
    }

    .madlink-aviditas .av-bg-fade {
        position: fixed;
        inset: 0;
        background: linear-gradient(to bottom, transparent 30%, #000 100%);
        z-index: 1;
        pointer-events: none;
    }

    /* Sticky header */
    .madlink-aviditas .madlink-sticky-header {
        position: fixed;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 100%;
        max-width: 566px;
        z-index: 100;
        background: rgba(0, 0, 0, 0.85);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        padding: 8px 16px;
        display: flex;
        align-items: center;
        gap: 12px;
        opacity: 0;
        transition: opacity 0.25s ease;
        pointer-events: none;
        border-radius: 0 0 16px 16px;
    }

    .madlink-aviditas .madlink-sticky-header.av-sticky-visible {
        opacity: 1;
        pointer-events: auto;
    }

    .madlink-aviditas .madlink-sticky-avatar {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        object-fit: cover;
    }

    .madlink-aviditas .madlink-sticky-name {
        font-family: var(--font-head);
        font-style: var(--font-head-style);
        font-synthesis: var(--font-head-synthesis);
        font-size: 14px;
        font-weight: var(--font-head-weight);
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .madlink-aviditas {
        padding: 36px 0;
    }

    /* Content container */
    .madlink-aviditas .madlink-content {
        position: relative;
        width: 100%;
        max-width: 566px;
        margin: 0 auto;
        min-height: calc(100vh - 72px);
        background-color: #000;
        border-radius: 30px;
        box-shadow: 0 1px 10px 2px rgba(0, 0, 0, 0.5);
        overflow: hidden;
        z-index: 10;
        display: flex;
        flex-direction: column;
    }



    @media (min-width: 768px) {
        /* .madlink-content {
            margin: 36px auto;
        } */
    }

    @media (max-width: 767px) {
        .madlink-aviditas {
            padding: 0;
        }
        .madlink-aviditas .madlink-content {
            width: 100%;
            min-height: 100vh;
            border-radius: 0;
            margin: 0 auto;
        }
    }

    /* Hero profile */
    .madlink-aviditas .av-hero {
        position: relative;
        width: 100%;
        aspect-ratio: 1 / 1;
    }

    .madlink-aviditas .av-hero-img {
        position: absolute;
        inset: 0;
        width: 100%;
        height: auto;
        object-fit: cover;
        object-position: center top;
    }

    .madlink-aviditas .av-hero-placeholder {
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, #1a1a2e, #16213e);
    }

    .madlink-aviditas .av-hero-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to bottom,
                transparent 40%,
                rgba(0, 0, 0, 0.3) 65%,
                rgba(0, 0, 0, 1) 100%);
        pointer-events: none;
        z-index: 1;
    }

    .madlink-aviditas .av-hero-darken {
        position: absolute;
        inset: 0;
        background: #000;
        opacity: 0;
        pointer-events: none;
        z-index: 2;
    }

    .madlink-aviditas .av-hero-info {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding-bottom: 8px;
        text-align: center;
        z-index: 3;
    }

    .madlink-aviditas .av-title-wrapper {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        gap: 4px;
    }

    .madlink-aviditas .av-title {
        font-family: var(--font-head);
        font-style: var(--font-head-style);
        font-synthesis: var(--font-head-synthesis);
        font-size: 32px;
        font-weight: var(--font-head-weight);
        margin-bottom: 4px;
        color: var(--accent-color);
        text-shadow: 0 1px 8px rgba(0, 0, 0, 0.5);
    }

    .madlink-aviditas .av-bio {
        font-family: var(--font-head);
        font-style: var(--font-head-style);
        font-synthesis: var(--font-head-synthesis);
        font-weight: var(--font-head-weight);
        font-size: 14px;
        color: var(--accent-color);
        line-height: 1.5;
        max-width: 360px;
        margin: 0 auto;
        text-shadow: 0 1px 4px rgba(0, 0, 0, 0.4);
    }

    /* Social icons override */
    .madlink-aviditas .madlink-social {
        --social-icon-size: 20px;
        gap: 4px;
        flex-wrap: wrap;
        padding: 16px 16px 0;
        margin-top: 0;
    }

    .madlink-aviditas .madlink-social a {
        width: 38px;
        height: 38px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.12);
        transition: background 0.15s ease, transform 0.15s ease;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .madlink-aviditas .madlink-social a:hover {
        background: rgba(255, 255, 255, 0.22);
        transform: scale(1.08);
    }

    /* Tile grid */
    .madlink-aviditas .av-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 14px;
        padding: 14px;
    }

    /* Tile (regular) */
    .madlink-aviditas .madlink-link-tile {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        aspect-ratio: 16 / 9;
        border-radius: 16px;
        overflow: hidden;
        text-decoration: none;
        color: #fff;
        background: #111;
        transition: transform 0.15s ease, box-shadow 0.15s ease;
        box-shadow: rgba(0, 0, 0, 0.35) 0px -50px 36px -28px inset;
    }

    .madlink-aviditas .madlink-link-tile:hover {
        transform: scale(1.02);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
    }

    .madlink-aviditas .madlink-link-tile-thumb {
        position: absolute;
        object-fit: cover;
        /* inset: 0; */
        width: 100%;
        height: 100%;
    }

    .madlink-aviditas .madlink-link-tile-overlay {
        /* position: absolute; */
        /* inset: 0; */
        /* background: linear-gradient(to top, rgba(0, 0, 0, 0.7) 0%, transparent 60%); */
    }

    .madlink-aviditas .madlink-link-tile-title {
        position: relative;
        font-size: 18px;
        font-weight: var(--font-body-weight);
        text-align: center;
        padding: 8px;
        word-break: break-word;
        z-index: 2;
    }

    /* Label position variants */
    .madlink-aviditas .madlink-link-tile.madlink-link-tile--label-top .madlink-link-tile-title {
        position: absolute;
        top: 8px;
        left: 8px;
        right: 8px;
        text-align: center;
    }

    .madlink-aviditas .madlink-link-tile.madlink-link-tile--label-bottom .madlink-link-tile-title {
        position: absolute;
        bottom: 8px;
        left: 8px;
        right: 8px;
        text-align: center;
    }

    /* Favicon badge */
    .madlink-aviditas .madlink-link-tile-favicon {
        position: absolute;
        top: 8px;
        z-index: 3;
        width: 20px;
        height: 20px;
        border-radius: 4px;
        background: rgba(0, 0, 0, 0.5);
        padding: 2px;
    }

    .madlink-aviditas .madlink-link-tile-favicon--left {
        left: 8px;
    }

    .madlink-aviditas .madlink-link-tile-favicon--right {
        right: 8px;
    }

    .madlink-aviditas .madlink-link-tile-favicon img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    /* Top tile (full-width) */
    .madlink-aviditas .madlink-link-tile-top {
        grid-column: 1 / 3;
        aspect-ratio: 16 / 9;
    }

    .madlink-aviditas .madlink-footer {
        padding: 32px 8px;
    }

    /* Link custom CSS container */
    .madlink-aviditas .madlink-link-tile[style] {
        /* Allow per-link custom_css via inline style */
    }

    @media (max-width: 767px) {

    }

    @media (max-width: 480px) {
        .madlink-aviditas .madlink-link-tile:not(.madlink-link-tile-top) .madlink-link-tile-title {
            font-size: 3.733vw;
        }
    }

    @media (max-width: 375px) {
        .madlink-aviditas .madlink-link-tile:not(.madlink-link-tile-top) .madlink-link-tile-title {
            font-size: 4.7vw;
        }
    }

.madlink-aviditas :focus-visible { outline: 2px solid currentColor; outline-offset: 4px; }
.madlink-aviditas [data-preview-title], .madlink-aviditas [data-preview-bio] { overflow-wrap: anywhere; }
@media (prefers-reduced-motion: reduce) {
    .madlink-aviditas *, .madlink-aviditas *::before, .madlink-aviditas *::after { transition: none; animation: none; }
}
