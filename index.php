<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laptop.cms — Dashboard</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="styling/home.css">
</head>
<body>
        <aside class="sidebar">
            <a class="branding" href="#" aria-label="laptop.cms home">
                <span class="brand-mark">L</span>
                <span>laptop.cms</span>
            </a>

            <div class="sidebar-label">WORKSPACE</div>
            <nav class="main-nav" aria-label="Hoofdnavigatie">
                <a class="nav-link active" href="#"><span class="nav-icon">⌂</span> Overview</a>
                <a class="nav-link" href="#"><span class="nav-icon">▤</span> Products <span class="nav-count">3</span></a>
                <a class="nav-link" href="#"><span class="nav-icon">⚙</span> Settings</a>
            </nav>

            <div class="sidebar-label products-label">YOUR PRODUCTS <span>03</span></div>
            <nav class="product-nav" aria-label="Producten">
                <a class="product-link selected" href="#">
                    <span class="status-dot"></span>
                    <span class="product-nav-copy"><strong>G2</strong><small>g2.laptop.eu</small></span>
                    <span class="product-tag">EU</span>
                </a>
                <a class="product-link" href="#">
                    <span class="status-dot"></span>
                    <span class="product-nav-copy"><strong>MK3</strong><small>mk3.laptop.nl</small></span>
                    <span class="product-tag">NL</span>
                </a>
                <a class="product-link" href="#">
                    <span class="status-dot"></span>
                    <span class="product-nav-copy"><strong>APEX</strong><small>apex.laptop.eu</small></span>
                    <span class="product-tag">EU</span>
                </a>
            </nav>

            <div class="sidebar-bottom">
                <div class="user-avatar">JD</div>
                <div class="user-copy"><strong>Workspace admin</strong><small>Administrator</small></div>
                <button class="icon-button" type="button" aria-label="Account options">···</button>
            </div>
        </aside>

        <main class="main-content">
            <header class="topbar">
                <div class="breadcrumb"><span>Workspace</span><span class="crumb-divider">/</span><strong>Overview</strong></div>
                <div class="topbar-right"><span class="status-indicator"></span><span>ALL SYSTEMS READY</span><span class="topbar-divider"></span><span class="date-label">CMS / 01</span></div>
            </header>

            <section class="welcome-section">
                <div>
                    <div class="eyebrow"><span class="eyebrow-line"></span> CONTENT MANAGEMENT SYSTEM</div>
                    <h1>Your products,<br><em>under control.</em></h1>
                    <p class="welcome-copy">Manage your product pages and keep every experience consistent from one place.</p>
                </div>
                <div class="welcome-aside">
                    <span class="aside-label">WORKSPACE STATUS</span>
                    <span class="status-pill"><span class="status-indicator"></span> Ready to edit</span>
                    <span class="aside-note">Last updated <strong>just now</strong></span>
                </div>
            </section>

            <section class="stats-grid" aria-label="Workspace statistieken">
                <article class="stat-card">
                    <div class="stat-top"><span>PRODUCTS</span><span class="stat-symbol">▤</span></div>
                    <div class="stat-number">03</div>
                    <div class="stat-foot">Products in your workspace</div>
                </article>
                <article class="stat-card">
                    <div class="stat-top"><span>LANGUAGES</span><span class="stat-symbol">文</span></div>
                    <div class="stat-number">02</div>
                    <div class="stat-foot">English and Nederlands</div>
                </article>
                <article class="stat-card">
                    <div class="stat-top"><span>LAYOUTS</span><span class="stat-symbol">◫</span></div>
                    <div class="stat-number">03</div>
                    <div class="stat-foot">Editorial, technical, minimal</div>
                </article>
            </section>

            <section class="products-section">
                <div class="section-heading">
                    <div>
                        <div class="eyebrow"><span class="eyebrow-line"></span> YOUR WORKSPACE</div>
                        <h2>Products <span class="heading-count">03</span></h2>
                    </div>
                    <button class="button button-secondary" type="button"><span>＋</span> New product</button>
                </div>

                <div class="product-grid">
                    <article class="product-card product-orange">
                        <div class="card-top">
                            <span class="product-monogram">G2</span>
                            <span class="layout-badge">EDITORIAL</span>
                            <button class="more-button" type="button" aria-label="More G2 options">···</button>
                        </div>
                        <div class="card-domain">g2.laptop.eu <span>↗</span></div>
                        <h3>The professional workhorse</h3>
                        <p class="card-description">A refined product experience built around clarity and performance.</p>
                        <div class="card-meta"><span><i class="tiny-dot orange"></i> English</span><span>01 content block</span></div>
                        <div class="card-footer">
                            <span class="edited-label">PRODUCT 01</span>
                            <button class="button button-edit" type="button">Edit product <span>↗</span></button>
                        </div>
                    </article>

                    <article class="product-card product-blue">
                        <div class="card-top">
                            <span class="product-monogram">MK3</span>
                            <span class="layout-badge">TECHNICAL</span>
                            <button class="more-button" type="button" aria-label="More MK3 options">···</button>
                        </div>
                        <div class="card-domain">mk3.laptop.nl <span>↗</span></div>
                        <h3>Compact power for makers</h3>
                        <p class="card-description">A practical, structured layout for specs, features and details.</p>
                        <div class="card-meta"><span><i class="tiny-dot blue"></i> Nederlands</span><span>02 content blocks</span></div>
                        <div class="card-footer">
                            <span class="edited-label">PRODUCT 02</span>
                            <button class="button button-edit" type="button">Edit product <span>↗</span></button>
                        </div>
                    </article>

                    <article class="product-card product-purple">
                        <div class="card-top">
                            <span class="product-monogram">AX</span>
                            <span class="layout-badge">MINIMAL</span>
                            <button class="more-button" type="button" aria-label="More APEX options">···</button>
                        </div>
                        <div class="card-domain">apex.laptop.eu <span>↗</span></div>
                        <h3>Built beyond the ordinary</h3>
                        <p class="card-description">A minimal product page with a focus on the essentials.</p>
                        <div class="card-meta"><span><i class="tiny-dot purple"></i> English</span><span>01 content block</span></div>
                        <div class="card-footer">
                            <span class="edited-label">PRODUCT 03</span>
                            <button class="button button-edit" type="button">Edit product <span>↗</span></button>
                        </div>
                    </article>
                </div>
            </section>

            <footer class="page-footer">
                <span><span class="footer-mark">L</span> LAPTOP.CMS <span class="footer-separator">/</span> PRODUCT WORKSPACE</span>
                <span>DESIGNED FOR CLARITY <span class="footer-separator">·</span> V. 0.1</span>
            </footer>
        </main>
</body>
</html>
