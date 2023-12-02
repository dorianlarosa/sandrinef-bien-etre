<section id="avantages-section" class="container-fluid section">
    <div class="container">
        <h2 class="section__title"><span class="round-container">O</span>ffrez vous un instant de Bien-Être qui correspond à vos envies</h2>
        <?php get_template_part('parts/divider'); ?>

        <p class="section__text">
            Les massages et les soins bien-être apportent de nombreux bienfaits , tant sur le plan physique que sur le plan émotionnel. Ils permettent de s’accorder un moment de pause, de se relaxer et de bénéficier de la détente profonde dont notre corps et notre esprit ont besoin.
        </p>

        <div class="list-advantages">


            <div>
                <?php
                /**
                 * Setup query to show the ‘services’ post type with ‘8’ posts.
                 * Output the title with an excerpt.
                 */
                $argsAvantages = array(
                    'post_type' => 'bienfaits',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,
                    'orderby' => 'menu_order',
                    'order' => 'ASC'
                );

                $toggle = true;

                $avantages = new WP_Query($argsAvantages);
                $countAvantages = 0;

                while ($avantages->have_posts()) : $avantages->the_post();
                    $countAvantages++;
                ?>



                    <div class="row <?php echo ($toggle ? "flex-row" : "flex-row flex-md-row-reverse") ?> item mt-4">
                        <?= $countAvantages === 1 ? '<svg xmlns="http://www.w3.org/2000/svg" class="plante plante-avantage-1" viewBox="0 0 74.32 224.16"><defs><style>.cls-1{fill:#4a1533;}</style></defs><title>Plan de travail 56</title><g id="Objects"><path class="cls-1" d="M49.21,217.65a4.63,4.63,0,0,0,.53,1.61,1.06,1.06,0,0,0,1.81,0c1.34-2-.64-5.38-1.29-7.31-2.27-6.73-3.94-13.72-5.74-20.58-3.58-13.69-6.86-27.48-9.16-41.45-4.77-28.93-5.83-58.83.18-87.64a171.75,171.75,0,0,1,6.05-22.14c1.29-3.66,2.76-7.25,4.13-10.88.89-2.37,1.31-6.21,3.45-7.78,1.07-.79,0-2.61-1.06-1.81-3,2.23-3.59,6.93-4.89,10.24a190.4,190.4,0,0,0-6.94,20.21,199.44,199.44,0,0,0-6.77,41.6c-1.43,28.87,2.73,58,9.42,86,1.86,7.76,3.88,15.5,6,23.2,1.06,3.89,2.07,7.83,3.37,11.66.38,1.14,2.21,4.5,1.46,5.59h1.81c-.11-.37-.21-.74-.31-1.11-.22-1.33-2.24-.76-2,.56Z"/><path class="cls-1" d="M33.83,64c-6.74.06-11.57-2.14-15.15-8-2.55-4.18-7.85-15.58-.45-17.42,6.76-1.69,9.85,7.73,11.42,12.56A51.53,51.53,0,0,1,31.72,66.6a1.05,1.05,0,0,0,2.1,0A52.88,52.88,0,0,0,28.9,43.69c-2.54-5.4-8-10-14-6-5.74,3.88-1.2,13.69,1.4,18.36A21.79,21.79,0,0,0,23,63.67c3.23,2.17,7,2.43,10.83,2.39a1,1,0,0,0,0-2.09Z"/><path class="cls-1" d="M33.85,85.7C35.14,80.44,36.74,75,40.68,71c2.93-2.92,12.74-8.7,12.69-.72-.06,10.77-14.91,12.94-22.79,15.18a1.05,1.05,0,0,0,.28,2.06c.84,0,1.67,0,2.51,0a1.05,1.05,0,0,0,0-2.1c-.84,0-1.67,0-2.51,0l.28,2.06c6.47-1.85,14.77-3.2,20-7.85,3.28-2.93,5.6-8.44,3.78-12.75-2.2-5.21-9-2.17-12.41,0C36.1,71,33.55,78.11,31.83,85.14c-.32,1.31,1.7,1.87,2,.56Z"/><path class="cls-1" d="M43.67,33.82A27,27,0,0,1,42,25.34c-.25-3.09-.67-6.13.23-9.16,1.4-4.66,9-13.1,14.19-8.54,3.77,3.3-2.25,12-4.52,15.33-3,4.39-6.82,7.89-10.15,12-.84,1,.63,2.53,1.48,1.49,2.6-3.19,5.58-6,8.14-9.25a62.4,62.4,0,0,0,5.81-9.33c2.19-4.07,5.11-12-1.75-13.26-5.92-1.07-12.07,3.57-14.38,8.75-1.68,3.77-1.52,7.37-1.19,11.39.28,3.45.59,7,2,10.16.54,1.23,2.35.17,1.81-1.06Z"/><path class="cls-1" d="M29.38,108.91c-.53,1.63-10.79-4.84-11.75-5.51-3.55-2.5-9.89-8.13-6.77-13.12C14.65,84.2,22.14,95.57,24,98.35c2.65,4,3.7,8.67,5.78,13,.59,1.22,2.39.16,1.81-1-1.9-3.9-2.84-8.18-5.11-11.91a52.24,52.24,0,0,0-7.23-9.25c-1.92-2-4-3.43-6.85-2.48a6.22,6.22,0,0,0-4.18,5.2c-.85,6.52,5,11.19,9.83,14.39,2.08,1.38,11.8,8.2,13.38,3.27.41-1.29-1.62-1.84-2-.56Z"/><path class="cls-1" d="M32.19,126.33c1-.94,1-2.23,1.33-3.52a47,47,0,0,1,2-6.12c1.94-5,4.84-8.83,10.26-10.32a5.37,5.37,0,0,1,2.88-.25c2.27.85,1.88,4,1.13,5.73a20.32,20.32,0,0,1-4.9,6.16,41,41,0,0,1-13.68,7.41,1,1,0,0,0-.74.73l0,.22c-.24,1.32,1.78,1.88,2,.55-.08.4,3.62-1.21,3.73-1.27,1.58-.79,3.08-1.73,4.64-2.57a24.83,24.83,0,0,0,7.72-5.84c2.49-3,6.49-9.22,2-12.49-3.38-2.48-9.24.88-11.93,3-2.36,1.81-3.54,4.5-4.67,7.2-.7,1.69-1.28,3.43-1.84,5.17-.32,1-.69,4.08-1.45,4.78-1,.91.49,2.39,1.49,1.48Z"/><path class="cls-1" d="M34.84,147.53c-1.27-5.32-8-9.91-12.84-11.54a36.75,36.75,0,0,0-9.93-1.67c-2-.08-4.62-.4-5.69,1.73-2.24,4.5,4.76,8.76,8,10.07,3,1.22,6.36,1.51,9.59,1.87,1.74.2,3.48.24,5.21.4.14,0,3.77,0,3.89.16.94,1,2.42-.51,1.49-1.49-.66-.69-1.48-.58-2.38-.62-2-.09-3.93-.17-5.9-.3-5.14-.36-10.66-.93-14.9-4.09a7.27,7.27,0,0,1-2.45-2.45c-1.31-2.85,1.78-3.27,3.72-3.16a34.26,34.26,0,0,1,7.78,1.27c4.47,1.32,11.2,5.44,12.37,10.37.32,1.32,2.34.76,2-.55Z"/><path class="cls-1" d="M38.58,164.2a32.42,32.42,0,0,1,4.36-12,21.58,21.58,0,0,1,4.46-4.93c.94-.81,2-2.12,3.24-2.35,2.1-.39,4.68,1.34,4.24,3.83-.69,3.89-4.25,6.52-6.94,9.11s-7,4.39-10.69,5.64c-1.27.43-.72,2.46.56,2a58,58,0,0,0,7.85-3.27c2.62-1.35,4.67-3.78,6.76-5.8,2.91-2.82,6.76-8.29,3.51-12.28-3.62-4.44-8.9.4-11.72,3.17-4.12,4-7.18,11.16-7.73,16.9-.13,1.35,2,1.34,2.1,0Z"/><path class="cls-1" d="M32.49,85.8a30.06,30.06,0,0,0,7.1-5c1.59-1.46,3.64-3.33,4.14-5.54.29-1.31-1.73-1.87-2-.55-.46,2-2.71,3.91-4.25,5.16a30.94,30.94,0,0,1-6,4.09c-1.23.55-.16,2.36,1.06,1.81Z"/><path class="cls-1" d="M33.12,63.93c-2.37-1.48-4.22-4.31-5.52-6.7s-2.89-4.55-3-7.38a1.05,1.05,0,0,0-2.1,0c.08,3.32,1.71,5.59,3.24,8.44s3.6,5.78,6.27,7.45c1.15.72,2.2-1.09,1.06-1.81Z"/><path class="cls-1" d="M29.52,108.09c-1-.38-1.81-1.84-2.47-2.6s-1.58-1.77-2.4-2.62S23,101.3,22.3,100.43s-1.09-1.85-1.84-2.65c-.92-1-2.4.5-1.48,1.48s1.34,2.14,2.2,3.08,2,2,3,3c1.44,1.57,2.77,3.94,4.82,4.73,1.26.49,1.81-1.54.56-2Z"/><path class="cls-1" d="M32.41,125.67c2.16,0,3.28-2.16,4.43-3.75.86-1.19,1.69-2.4,2.54-3.6.38-.53.85-1,1.21-1.53A8.4,8.4,0,0,1,41.77,115L40,114.55l0,.12a1.05,1.05,0,0,0,2-.56l0-.11a1.07,1.07,0,0,0-1.76-.47,10.6,10.6,0,0,0-1.48,2.14c-.56.8-1.19,1.55-1.74,2.37s-1.34,1.89-2,2.82c-.37.5-1.86,2.7-2.62,2.71a1.05,1.05,0,0,0,0,2.1Z"/><path class="cls-1" d="M19.44,142.38c3,.93,6,1.32,8.67,3.07,1.51,1,2.8,2.23,4.66,2.43,1.34.15,1.33-1.94,0-2.09-1.87-.21-4-2.49-5.67-3.28-2.25-1.06-4.74-1.41-7.1-2.15-1.29-.41-1.85,1.62-.56,2Z"/><path class="cls-1" d="M38.51,162.66c2.32-.37,4.79-3.17,6.39-4.73,2.09-2,4.32-4,6.24-6.12.9-1-.58-2.49-1.48-1.48-1.56,1.75-3.37,3.23-5,4.9s-4.28,5-6.68,5.41c-1.33.21-.77,2.23.55,2Z"/></g></svg>' : '' ?>
                        <?= $countAvantages === 2 ? '<svg xmlns="http://www.w3.org/2000/svg" class="plante plante-avantage-2" viewBox="0 0 129.18 135.13"><defs><style>.cls-1{fill:#4a1533;}</style></defs><title>Plan de travail 57</title><g id="Objects"><path class="cls-1" d="M.28,130.36C9.22,134,19,137,28.57,133.64c8.08-2.88,14.28-10.16,19.08-17,5.15-7.32,11.14-17.51,10.16-26.82-.75-7.16-6.53-10.75-13.34-9.62a17.21,17.21,0,0,0-13.4,11.11c-3,7.52,1.64,14.43,9.68,15.05,7.79.59,14.73-5,19.36-10.64,6.81-8.35,9.69-19.3,13.5-29.19,4.78-12.4,10.08-24.11,18.16-34.74A142,142,0,0,1,104.71,17a75,75,0,0,1,7-6.08c3.09-2.4,7.16-6.2,11.1-7.13,1.59-.38,1.24-1.7-.35-1.32C116.29,4,110,9.86,105.4,14A124,124,0,0,0,89.32,31.74C78.94,45.38,73.11,61,67.19,76.93c-3.06,8.26-6.46,16.41-13.06,22.5-4,3.72-9.85,7-15.43,4.71-3.71-1.53-6.56-5.22-6.08-9.37.9-7.68,9.13-16.25,17.35-12.53s5.1,15.07,2.45,21.36a68.18,68.18,0,0,1-16.36,23.57c-10.09,9.25-22.15,6.64-33.69,1.91-.78-.32-3.18.83-2.09,1.28Z"/><path class="cls-1" d="M104,17.46c-1.12-.63,2.41-6.05,3-6.88,2.1-3.09,5.15-5.24,8.21-7.31,2.3-1.56,6.29-2.77,7.23.86.61,2.41-2,4.48-3.68,5.77-3.67,2.91-10.69,5.88-15.52,6-.53,0-1.68.23-1.83.91l-.05.25c-.2,1,2.45.57,2.64-.33l0-.25-1.83.91c3.7-.11,7.38-1.75,10.85-2.92a24,24,0,0,0,8.57-4.87c1.89-1.67,3.91-3.42,3.43-6.2C124.65.91,123,.1,120.64,0,115.13-.2,109,5,105.7,9c-1.15,1.41-6.34,8.31-3.75,9.74.75.42,3.17-.68,2.09-1.27Z"/><path class="cls-1" d="M93,29.19c-5.94-.48-8.81-4.85-10-10.09a26,26,0,0,1-.8-5.34c0-2.17,1.43-12,6.83-6.64,2.25,2.21,2,7.61,2.15,10.47.15,4.2-.68,8.07-.84,12.22,0,1.07,2.6.54,2.63-.33.23-5.8,4.15-30.65-9.15-24.29-5.3,2.54-4.57,9.93-3.46,14.62,1.45,6.1,5.2,10.35,11.66,10.87,1,.08,2.8-1.35,1-1.49Z"/><path class="cls-1" d="M91.66,29c-.3-4.24-1.94-8.24-2.26-12.5-.16-2.08,0-4.13-.15-6.2-.1-1-1.24-4.14-.2-5s-1.46-1-2.11-.43-.72.86-.93,1.81c-.46,2.1.6,5.93.66,8,.16,5.18,2,10,2.35,15.08.06.85,2.71.31,2.64-.7Z"/><path class="cls-1" d="M95,28.45a38.24,38.24,0,0,1,18.6-4.33c3,0,6.49.17,9.35,1.35,1.36.55,2.69,1.13,3,2.72.82,1.07.52,1.79-.9,2.18a3.63,3.63,0,0,1-2.83,1.28c-5,1.33-10.51.6-15.57.05s-11-1.46-15.48-3.88c-.59-.32-2.22,0-2.36.8l0,.19c-.19,1,2.47.57,2.63-.33l0-.19-2.36.8c6.36,3.45,15,4.33,22.2,4.71,4.14.21,14.79.77,17.34-3.77,3.34-6-9.34-7.24-12.34-7.37a43.51,43.51,0,0,0-22.9,5c-1.55.86.77,1.26,1.63.79Z"/><path class="cls-1" d="M92.81,28.22c10.74-.09,21.49.29,32.23.29,1,0,2.8-1.5,1-1.5-10.75,0-21.5-.37-32.23-.29-1,0-2.8,1.51-1,1.5Z"/><path class="cls-1" d="M82.32,46.08c-3.16.43-8.26-4.18-10.38-6.13a16,16,0,0,1-4.47-6.7c-.8-2.46-2-7.45-.16-9.62,1.51-1.77,4-1.07,5.1,1,.5,1,.9,2,1.3,3.07.77,2,1.69,4,2.35,6.08,1.53,4.74,1.74,9.77,3,14.54.24.91,2.87.22,2.63-.71-1.17-4.4-5.26-35.75-15.58-25.89C61.6,26,64.23,34.91,67.64,39.05,70.55,42.58,77.1,48.2,82,47.53c1.27-.17,2.19-1.7.36-1.45Z"/><path class="cls-1" d="M67.93,21.25a73.63,73.63,0,0,0,4.89,15.06c1.5,3.4,2.49,7.21,4.58,10.3.49.73,3-.14,2.45-1-2.26-3.32-3.38-7.63-5-11.29a67.58,67.58,0,0,1-4.29-13.74c-.19-.9-2.83-.25-2.64.7Z"/><path class="cls-1" d="M82.66,47c2.65-2.49,9-2.69,12.4-2.67a26.37,26.37,0,0,1,8.62,1.56,25.6,25.6,0,0,1,3.14,1.24q1.58,5.57-3.57,5.49c-4.82.77-9.78-.16-14.36-1.66-2.83-.93-4.86-3.8-7.65-4.3-.84-.15-3.1,1.16-1.61,1.43,1.3.23,2.57,2,3.67,2.65A18.12,18.12,0,0,0,88,52.6a35,35,0,0,0,10.88,1.69c3.23,0,12.13-.52,12.49-5.34s-11.95-6.06-15.23-6.09c-4.5,0-12,.43-15.54,3.73-1.11,1,1.48,1,2.11.43Z"/><path class="cls-1" d="M83.44,47.26c4.86.35,9.39,1.73,14.16,2.51,3.94.65,7.94.44,11.91.42,1,0,2.8-1.5,1-1.49-4.84,0-9.53.13-14.28-1a74.72,74.72,0,0,0-11.8-2c-1-.08-2.8,1.36-1,1.49Z"/><path class="cls-1" d="M71.81,69.61c-4.74-1.89-8.85-3.22-13-6.41-3.7-2.84-9.52-8.68-7.58-13.92-.15-1.93.84-2.55,3-1.88a3.65,3.65,0,0,1,4.56,1.2A14.13,14.13,0,0,1,60.84,51a30.2,30.2,0,0,1,3.67,8.27c1.31,3.91,3,8.29,5.62,11.48.58.69,3.11-.24,2.44-1C67.81,64,67.53,56,63.29,50c-2.74-3.85-8.06-7.07-12.53-4-5,3.44-1.67,10.81,1.43,14.42C57,66,63.18,68.28,69.72,70.88c.79.32,3.18-.84,2.09-1.27Z"/><path class="cls-1" d="M51,46.41c1.79,2.52,2.62,5.81,4.15,8.52a56.46,56.46,0,0,0,4,6c3,3.94,6.21,8.36,10,11.52.71.59,3.16-.44,2.44-1-3.79-3.14-7-7.57-10-11.51a54.68,54.68,0,0,1-5.33-8.59c-1-2-1.55-4.17-2.83-6-.51-.72-3.06.16-2.45,1Z"/><path class="cls-1" d="M73.05,69.76c5.18-2.69,11.23-3.39,17-3.84,3.08-.24,7.33-1.32,10.16.37,4.39,2.64,2.56,7.9-2.48,9.06a33.13,33.13,0,0,1-16.54-1.09c-3.72-1.24-7.29-3.37-11-4.4-.55-.16-2,.15-2.12.88L68,71c-.13,1,2.52.56,2.64-.33l0-.26-2.12.88c3.65,1,7.15,3.16,10.78,4.36a36.62,36.62,0,0,0,12.48,1.5c4.21-.05,12-.2,13.55-5.3,2-6.39-5.71-8.06-10.16-7.81-8,.46-16.54,1.19-23.77,4.94-1.56.81.77,1.23,1.64.78Z"/><path class="cls-1" d="M71.13,70.08a72.39,72.39,0,0,0,19.5.92c3.31-.27,8.14,0,11.13-1.54,1.57-.81-.77-1.23-1.63-.78s-3.2.33-4.11.43c-2.13.23-4.6.41-6.72.46-5.29.13-11.39.18-16.56-.92-.84-.18-3.09,1.12-1.61,1.43Z"/></g></svg>' : '' ?>
                        <?= $countAvantages === 3 ? '<svg xmlns="http://www.w3.org/2000/svg" class="plante plante-avantage-3" viewBox="0 0 183.1 119.05"><defs><style></defs><path class="cls-1" d="m28.33,39.04c2,9.43,12.87,16.49,22.38,13.93,9.79-2.64,14.27-14.11,13.5-23.35-.78-9.38-7.07-19.34-15.13-24.24C39.74-.31,25.16.39,16.14,6.35-4.48,19.94,1.28,53.89,14.06,70.89c15.16,20.17,44.72,26.15,68.57,22.75,15.56-2.22,30.54-8.02,44.2-15.66,7.01-3.92,13.84-8.32,20.28-13.12,6.36-4.73,11.37-10.49,17.12-15.86,1.06-.99-.54-2.59-1.6-1.6-4.16,3.89-7.75,8.28-12.14,11.94-4.74,3.96-9.86,7.44-15.04,10.77-9.97,6.42-20.51,11.98-31.71,15.92-22.02,7.74-47.31,8.83-68.85-1.25C14.67,75.33,3.81,53.87,5.18,31.88c.76-12.13,7.22-23.74,19.63-26.93,10.45-2.68,22-.7,29.21,7.65,7.44,8.62,11.35,21.41,4.49,31.59-3.58,5.31-9.07,8.12-15.47,6.46-6.12-1.59-11.19-5.91-12.53-12.23-.3-1.42-2.48-.82-2.18.6h0Z"/><path class="cls-1" d="m164.2,47.47c.19-6.35,2.74-11.19,6.66-16.05,1.38-1.72,6.97-7.31,7.15-2.09.1,2.96-2.55,6.53-4.45,8.63-1.76,1.95-3.96,3.27-5.91,4.98-.68.6-3.15,4.07-4.11,3.92-1.48-.24-2.56-6.05-2.86-7.5-.45-2.16-.79-4.13.43-6.22.95-1.63,1.26-2.41,1.56-.69.81,4.62-.49,9.17-1.32,13.64-.28,1.54-.5,3.64,1.62,3.62.58,0,1.2-.55,1.68-.75,1.45-.62,3.05-1,4.63-1.12,2.33-.17,5.03-.3,6.95,1.04,2.08,1.45,2.12,4.06-.9,4.77-1.68.4-3.97-.28-5.41-.94-2.22-1.01-6.1-2.6-6.81-5.12-.36.48-.73.95-1.09,1.43.23-.02.46-.04.69-.06,1.44-.12,1.45-2.38,0-2.26-.23.02-.46.04-.69.06-.72.06-1.3.68-1.09,1.43,1.08,3.84,5.88,5.94,9.39,7.19,2.76.98,8.46,1.56,10.18-1.56,1.47-2.66-.97-5.39-2.98-6.86-2.05-1.5-3.49-1.37-5.97-1.35-1.2,0-2.34-.05-3.54.1-1.04.13-2.6.92-3.61.84-.67-.05-.53.62-.86.12-.29-.44.72-3,.82-3.4.64-2.56.67-4.89.61-7.55-.04-1.68.71-6.46-1.87-6.86-3.02-.47-5.01,4.95-5.11,7.13-.2,4.26,1.72,9.91,4.5,13.14.26.31.73.38,1.1.29,2.06-.49,3.89-3.12,5.39-4.51,2.3-2.12,4.91-3.77,6.93-6.22,2.47-3.01,6.65-9.48,3.05-13.16-3.44-3.52-8.13,2.31-10.04,4.71-4.16,5.25-6.77,10.43-6.97,17.21-.04,1.45,2.22,1.45,2.26,0h0Z"/><path class="cls-1" d="m141.95,64.65c-.03.11-.05.21-.08.32.55-.23,1.11-.45,1.66-.68-1.59-.81-2.17-4.37-2.43-5.91-.23-1.33-.41-2.67-.51-4.01-.13-1.78-.62-2.88,1.12-3.66,1.92-.87,1.52.35,1.68,2.12.11,1.17.13,2.39.1,3.56-.07,3-.61,6.03-1.55,8.88.74.1,1.48.2,2.22.3l.02-.26c.11-1.45-2.15-1.44-2.26,0l-.02.26c-.1,1.32,1.84,1.46,2.22.3.9-2.7,4.34-21.82-3.18-18.74-3.67,1.5-2.78,6.35-2.38,9.46.36,2.76.93,8.16,3.84,9.65.63.32,1.47.07,1.66-.68.03-.11.05-.21.08-.32.36-1.41-1.82-2.01-2.18-.6h0Z"/><path class="cls-1" d="m141.15,65.61c-.05.07-.11.13-.16.19-.35.43-.41.87-.18,1.37,2.24,4.85,5.52,8.36,10.76,9.94,3.23.97,8.46,1.12,10.25-2.41,2.07-4.09-2.05-6.25-5.39-7.13-2.63-.69-5.1-1.3-7.8-1.51-2.39-.18-4.69.88-7.09.27.17.63.33,1.26.5,1.89.11-.09.23-.19.34-.28,1.13-.92-.48-2.51-1.6-1.6-.11.09-.23.19-.34.28-.67.55-.27,1.69.5,1.89,2.32.59,4.58-.09,6.9-.08,3.06.02,6.12.7,9.05,1.58.57.21,1.14.42,1.7.64.08,1.36.17,2.72.25,4.07-.34.5-2.23.65-2.77.69-1.97.16-3.94-.37-5.72-1.17-3.74-1.69-5.91-4.58-7.59-8.2-.06.46-.12.91-.18,1.37.05-.06.11-.13.16-.2.91-1.12-.68-2.73-1.6-1.6h0Z"/><path class="cls-1" d="m121.13,78.43c-2.46-.78-4.38-6.05-4.83-8.22-.5-2.43-.54-4.93.16-7.32.42-1.45,1.8-4.81,3.08-1.75,1.03,2.45.15,6.98.15,9.48,0,2.28.37,6.34-.93,8.32-.8,1.22,1.15,2.35,1.95,1.14.94-1.42.89-3.57,1.05-5.24.33-3.47.22-7,.22-10.48,0-2.31-.08-8.73-4.12-7.44-3.94,1.26-4.42,8.72-4.06,11.86.42,3.73,2.65,10.52,6.74,11.82,1.39.44,1.98-1.74.6-2.18h0Z"/><path class="cls-1" d="m119.37,78.75h-.2v2.26c4,0,7.94.04,11.88.87,1.52.32,3.24.59,4.69,1.18,2.15.86,4.98,4.26,1.2,5.5-3.87,1.26-8.63-2-11.31-4.47-.89-.82-4.58-3.09-4.79-4.13-.29-1.42-2.47-.82-2.18.6.28,1.37,1.55,2.08,2.59,2.9,2.62,2.08,5.08,4.2,8.01,5.88,3.04,1.74,8.45,2.78,11.26-.01,3.01-2.99-.17-6.58-3.09-8-5.41-2.63-12.41-2.56-18.25-2.56-1.45,0-1.46,2.26,0,2.26h.2c1.45,0,1.46-2.26,0-2.26h0Z"/><path class="cls-1" d="m98.25,87.49c-3.12-.26-1.61-10.93-1.22-12.61.34-1.46,2.58-9.71,4.64-8.36,1.16.76.9,4.33.78,5.59-.18,1.94-.77,3.84-1.43,5.67-.67,1.86-1.46,3.67-2.17,5.51-.68,1.77-1.02,3.84-1.94,5.49-.71,1.27,1.24,2.41,1.95,1.14,1.44-2.58,2.04-5.73,3.15-8.49,1.21-3.02,2.41-6.06,2.7-9.32.21-2.37-.43-10.18-4.62-8.26-3.73,1.7-5.35,9.86-5.76,13.27-.42,3.57-1.18,12.21,3.91,12.64,1.45.12,1.44-2.14,0-2.26h0Z"/><path class="cls-1" d="m96.22,88.74c-2.69,1.18-.01,6.25.89,7.94,2.57,4.81,8.16,7.09,13.4,7.18,4.7.08,4.92-5.48,2.32-8.21-2.14-2.24-5.4-3.62-7.93-5.43-2.38-1.71-4.84-1.96-7.45-3.05-1.34-.56-1.93,1.63-.6,2.18,1.4.58,2.9.7,4.31,1.31,1.52.67,2.73,1.67,4.06,2.64,1.47,1.07,3.12,1.81,4.61,2.83,1.24.84,1.38,1.07,1.95,2.6,1.06,1.31.74,1.99-.96,2.04-.81.61-1.65.72-2.51.32-3.45-.16-6.59-1.67-8.6-4.52-.25-.36-2.95-5.61-2.36-5.87,1.33-.58.18-2.53-1.14-1.95h0Z"/><path class="cls-1" d="m65.91,91.83c-2.04-2.4,1.16-10.22,2-12.9.7-2.2,1.5-4.42,2.7-6.4.88-1.45,5.63-7.06,6.46-2.21.56,3.24-3.83,8.96-5.56,11.46-1.18,1.71-2.34,3.42-3.49,5.14-.37.56-1.84,3.41-2.55,3.5-1.42.18-1.44,2.45,0,2.26,1.82-.23,2.52-1.76,3.5-3.18,2.26-3.26,4.69-6.52,6.68-9.95,1.56-2.68,6.52-11.03,1.9-13.32-4.87-2.41-9.29,5.49-10.63,8.76-1.55,3.8-2.66,7.94-3.42,11.98-.4,2.11-.67,4.74.8,6.47.94,1.11,2.53-.5,1.6-1.6h0Z"/><path class="cls-1" d="m65.47,91.97l-.09-.25c-.3-.81-1.63-1.24-2.07-.27-1.05,2.31-.58,5.62-.36,8.1.27,3.02,1.09,6.01,2.54,8.68,1.61,2.97,5.27,5.9,8.86,4.3,3.95-1.76,2.71-7.97.79-10.76-1.78-2.58-4.54-4.56-6.65-6.88-1.6-1.76-3.24-3.66-5.57-4.41-.55-.18-1.28.21-1.39.79-.02.11-.04.22-.06.33-.27,1.42,1.91,2.03,2.18.6.02-.11.04-.22.06-.33-.46.26-.93.53-1.39.79,3.11,1,5.22,4.76,7.5,6.89,1.4,1.31,3.01,2.52,3.93,4.24.93,1.73,1.64,5.38-.37,6.46-3.63,1.94-6.28-3.38-7.16-6-.65-1.93-1-3.95-1.09-5.99-.07-1.58-.53-4.23.13-5.68-.69-.09-1.38-.18-2.07-.27.03.08.06.16.09.25.49,1.36,2.68.77,2.18-.6h0Z"/><path class="cls-1" d="m35.25,85.65c.72-4.71,5.66-9.93,8.49-13.55,1.7-2.17,3.37-4.15,5.63-5.75.85-.6,1.87-1.39,2.8-1.84.62-.63,1.37-.81,2.24-.53,1.4-.41,1.77.01,1.11,1.26-.04,3.49-4.03,7.13-6.4,9.1-2.34,1.96-4.52,4.28-7.06,5.98-1.45.97-5.15,3.82-6.7,3.9-1.44.08-1.46,2.25,0,2.26.09,0,.17,0,.26,0,1.45,0,1.46-2.25,0-2.26-.09,0-.17,0-.26,0v2.26c3.16-.17,5.28-2.54,7.84-4.21,3.14-2.04,5.96-4.91,8.77-7.38,2.55-2.23,7.62-8.58,5.78-12.44-2.15-4.51-9.48,1.69-11.53,3.47-2.98,2.57-5.31,6.08-7.57,9.27-2.03,2.86-5.03,6.29-5.58,9.85-.22,1.42,1.96,2.04,2.18.6h0Z"/><path class="cls-1" d="m35,84.05c-1.52,2.77-1.64,6.29-2,9.38-.47,3.96-.76,7.93-.75,11.92.01,3.64,2.25,12.47,7.38,11.92,4.66-.49,3.78-8.86,3.29-11.92-.52-3.25-1.47-6.42-2.82-9.43-.76-1.68-1.76-3.17-2.62-4.79-.67-1.26-2.25-3.92-2.21-5.31h-2.26v.25c0,1.45,2.26,1.46,2.26,0v-.25c0-1.46-2.21-1.45-2.26,0-.09,2.98,2.29,5.9,3.71,8.43,2.58,4.59,4.38,10.18,4.34,15.49,0,.84.18,2.79-.48,3.51-2.43,2.62-3.69-.21-4.56-1.76-1.6-2.85-1.55-5.71-1.48-8.86.06-2.61.26-5.21.54-7.81.34-3.08.33-6.87,1.86-9.65.7-1.27-1.25-2.42-1.95-1.14h0Z"/></svg>' : '' ?>

                        <?php $imageAvantage = get_field("image"); ?>

                        <div class="col-12 col-lg-6 col-image" style="background-image: url('<?= $imageAvantage["sizes"]["medium_large"]; ?>');">

                        </div>

                        <div class="col-12 col-lg-6 col-details">
                            <h3 class="col-details__title">
                                <span class="number">0<?= $countAvantages; ?></span>
                                <span class="text"><?= the_field("intitule_affichage"); ?></span>

                                
                            </h3>

                            <p class="col-details__text">
                                <?= the_field("texte"); ?>
                            </p>

                            <a class='btn-arrow col-details__btn' href='<?= the_permalink() ?>'>

                                <span class="background">
                                </span>

                                <span class='text'>
                                    En savoir plus
                                </span>

                                <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>

                            </a>

                        </div>

                    </div>

                <?php $toggle = !$toggle;

                endwhile;
                wp_reset_postdata();
                ?>


            </div>

        </div>
    </div>
</section>