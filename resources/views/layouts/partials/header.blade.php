<header >
        <div id="brand">
            <img src="../assets/img/dc-logo.png" alt="Dc comics logo">
        </div>
        <nav id="top-navbar">
            <ul>
                <li v-for="link in navbarLinks" :class="link.active ? 'active' : ''">
                    <a :href="link.link">
                        {{ link.text }}
                    </a>
                </li>
            </ul>
        </nav>
    </header>