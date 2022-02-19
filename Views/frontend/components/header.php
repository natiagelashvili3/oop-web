<header>
    <div class="container">
        <div class="row">
            <div class="logo">
                GOCAST
            </div>
            <nav>
                <ul>
                    <li>
                        <a href="?page=home" <?= $pageName == 'home' ? 'class="active"' : '' ?>>Home</a>
                    </li>
                    <li>
                        <a href="?page=categories" <?= $pageName == 'categories' ? 'class="active"' : '' ?>>Categories</a>
                    </li>
                    <li>
                        <a href="?page=news" <?= $pageName == 'news' ? 'class="active"' : '' ?>>News</a>
                    </li>
                    <li>
                        <a href="?page=contact" <?= $pageName == 'contact' ? 'class="active"' : '' ?>>Contact</a>
                    </li>
                </ul>
            </nav>
    
            <div class="button-container">
                <button>
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <g>
                            <g>
                                <path d="M409.713,38.624C385.842,11.584,342.642,0,287.377,0H126.993c-11.296,0-20.896,8.16-22.688,19.2L37.522,439.392
                                    c-1.312,8.288,5.152,15.776,13.6,15.776h99.008l24.864-156.48l-0.768,4.928c1.76-11.04,11.328-19.2,22.624-19.2h47.04
                                    c92.448,0,164.8-37.248,185.952-144.992c0.64-3.2,1.632-9.344,1.632-9.344C437.489,90.208,431.441,63.168,409.713,38.624z"/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M456.529,150.496c-22.976,106.08-96.288,162.208-212.64,162.208h-42.176L170.225,512h68.416
                                    c9.888,0,18.304-7.136,19.84-16.832l0.8-4.224l15.744-98.912l1.024-5.44c1.536-9.696,9.952-16.832,19.808-16.832h12.512
                                    c80.864,0,144.16-32.576,162.656-126.816C478.449,205.12,474.865,173.408,456.529,150.496z"/>
                            </g>
                        </g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                    </svg>
                    Donate
                </button>
            </div>
        </div>
    </div>
</header>