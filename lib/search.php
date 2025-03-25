<?php

add_action('wp_head', 'add_search_feature');

function add_search_feature() {
    ?>
    <div class="hsearchform hidden">
        <form id="search-form" action="<?php echo home_url('/'); ?>" method="get">
            <input type="text" name="s" placeholder="Search...">
            <button type="submit" id="search">
                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                    <path
                        d="M8.375 14.75C11.8958 14.75 14.75 11.8958 14.75 8.375C14.75 4.8542 11.8958 2 8.375 2C4.8542 2 2 4.8542 2 8.375C2 11.8958 4.8542 14.75 8.375 14.75Z"
                        stroke="white" stroke-width="1.5" stroke-linejoin="round" />
                    <path d="M12.958 12.9581L16.14 16.1401" stroke="white" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
        </form>
        <span class="close-search-form">
            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                <path d="M4.75 4.75L14.25 14.25" stroke="white" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M14.25 4.75L4.75 14.25" stroke="white" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </span>
        <style>
            .hidden {
                display: none !important;
            }

            .hsearchform {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                background: #2e313f;
                z-index: 1000;
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 10px 0;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            }

            .hsearchform form {
                display: flex;
                align-items: center;
                justify-content: center;
                max-width: 800px;
                /* Adjust based on preference */
                margin: 0 auto;
                width: 100%;
                background: #fff;
                border: 1px solid #ccc;
                border-radius: 5px;
                overflow: hidden;
            }

            .hsearchform input {
                flex: 1;
                height: 50px;
                padding: 0 15px;
                font-size: 16px;
                border: none;
                outline: none;
            }

            .hsearchform button {
                width: 60px;
                height: 50px;
                background: #333;
                color: white;
                border: none;
                cursor: pointer;
                transition: background 0.3s ease;
            }

            .hsearchform button:hover {
                background: #555;
            }
        </style>
        <script>
            jQuery(document).ready(function ($) {
                $(document).on("click", ".hsearch a", function () {
                    $(document).find('.hsearchform').removeClass('hidden');
                });
                $(document).on("click", ".close-search-form", function () {
                    $(document).find('.hsearchform').addClass('hidden');
                });

            });
        </script>
    </div>
    <?php
}
