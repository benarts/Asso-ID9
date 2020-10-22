<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../Css/css_admin/admin.css">
        <title>Administration - Marie Hulot</title>
    </head>
    <body>
        <div class="container">
            <div class="container_list" id="list_images">
                <?php require("../../../Controleur/database_resource/list.php") ?>
            </div>

            <div class="container_texts" id="list_texts">
                
            </div>
        </div>

        <div class="header"></div>

        <div class="menu_drawer" id="menu_drawer">
            <ul>
                <li>
                    <a href="#list_images">
                        <svg width="24" height="24" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0z" fill="none"/>
                            <path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/>
                        </svg>
                        <p>Images</p>
                    </a>
                </li>
                <li>
                    <a href="#list_texts">
                        <svg width="24" height="24" viewBox="0 0 24 24">
                            <path d="M14 17H4v2h10v-2zm6-8H4v2h16V9zM4 15h16v-2H4v2zM4 5v2h16V5H4z"/>
                            <path d="M0 0h24v24H0z" fill="none"/>
                        </svg>
                        <p>Textes</p>
                    </a>
                </li>
            </ul>
        </div>

        <div class="toolbar">
            <a href="#menu_drawer" onclick="javascript:openDrawer();" class="icon_drawer">
                <svg width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/>
                    <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
                </svg>
            </a>
        </div>

        <div class="foreground"></div>

        <style>
            .class_tr
            {
                background-color: white;
            }

            .class_tr:hover
            {
                background-color: rgba(0, 0, 0, 0.04);
            }
        </style>

        <script src="../../Js/js_admin/admin.js"></script>
    </body>
</html>