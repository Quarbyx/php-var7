<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Презентация DataSpace</title>
    <style>
        body { font-family: sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 800px; margin: 20px auto; padding: 0 20px; }
        h1, h2, h3 { color: #0056b3; }
        .section { margin-bottom: 2em; }
        .authors { list-style: none; padding: 0; }
        .certificates { list-style-type: square; }
        .component { margin-bottom: 1em; }
        .error { background-color: #ffdddd; border-left: 6px solid #f44336; padding: 15px; margin-bottom: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <?php
        // Включаем отображение ошибок XML для отладки
        libxml_use_internal_errors(true);

        $xml_file = 'dataspace.xml';
        $xml = simplexml_load_file($xml_file);

        // --- НАЧАЛО БЛОКА ПРОВЕРКИ ОШИБОК ---
        if ($xml === false) {
            echo "<div class='error'>";
            echo "<h1>Ошибка загрузки XML</h1>";
            echo "<p>Не удалось прочитать файл '<strong>" . $xml_file . "</strong>'.</p>";
            echo "<p><strong>Возможные причины:</strong></p>";
            echo "<ul>";
            echo "<li>Файл `dataspace.xml` не находится в той же папке, что и `index.php`.</li>";
            echo "<li>У PHP нет прав на чтение файла `dataspace.xml`.</li>";
            echo "<li>Файл `dataspace.xml` содержит синтаксические ошибки.</li>";
            echo "</ul>";
            echo "<h4>Технические детали:</h4>";
            foreach(libxml_get_errors() as $error) {
                echo "<pre>" . htmlspecialchars($error->message) . " на строке " . $error->line . "</pre>";
            }
            echo "</div>";
            libxml_clear_errors();
            exit; // Прекращаем выполнение скрипта, так как данных нет
        }
        // --- КОНЕЦ БЛОКА ПРОВЕРКИ ОШИБОК ---
        ?>

        <header class="section">
            <h1><?php echo $xml->about->title; ?></h1>
            <h2><?php echo $xml->about->name; ?></h2>
            <p><strong>Презентацию подготовили студенты группы <?php echo $xml->about->group; ?>:</strong></p>
            <ul class="authors">
                <?php foreach ($xml->about->authors->author as $author): ?>
                    <li><?php echo $author; ?></li>
                <?php endforeach; ?>
            </ul>
            <p><em><?php echo $xml->about->location; ?>, <?php echo $xml->about->year; ?></em></p>
        </header>

        <section class="section">
            <h2><?php echo $xml->who_we_are->title; ?></h2>
            <p><?php echo $xml->who_we_are->description; ?></p>
            <h3><?php echo $xml->who_we_are->computing_resources->title; ?></h3>
            <p><?php echo $xml->who_we_are->computing_resources->content; ?></p>
            <h3><?php echo $xml->who_we_are->reliability_and_security->title; ?></h3>
            <p><?php echo $xml->who_we_are->reliability_and_security->content; ?></p>
            <h3><?php echo $xml->who_we_are->services_summary->title; ?></h3>
            <p><?php echo $xml->who_we_are->services_summary->content; ?></p>
        </section>

        <section class="section">
            <h2><?php echo $xml->platform_architecture->title; ?></h2>
            <p><?php echo $xml->platform_architecture->certification; ?></p>
            <h3>Сертификаты:</h3>
            <ul class="certificates">
                <?php foreach ($xml->platform_architecture->certificates->certificate as $certificate): ?>
                    <li><?php echo $certificate; ?></li>
                <?php endforeach; ?>
            </ul>
        </section>

        <section class="section">
            <h2>Услуги</h2>
            <div class="service">
                <h3><?php echo $xml->services->baas->title; ?></h3>
                <p><?php echo $xml->services->baas->description; ?></p>
                <h4>Возможности:</h4>
                <?php foreach ($xml->services->baas->features->feature as $feature): ?>
                    <div class="component">
                        <strong><?php echo $feature->name; ?>:</strong> <?php echo $feature->tool; ?>
                        <?php if (isset($feature->details)): ?>
                            <p><small><?php echo $feature->details; ?></small></p>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="service">
                <h3><?php echo $xml->services->iaas->title; ?></h3>
                <p><?php echo $xml->services->iaas->description; ?></p>
                 <h4>Компоненты:</h4>
                <?php foreach ($xml->services->iaas->components->component as $component): ?>
                    <div class="component">
                        <strong><?php echo $component->name; ?>:</strong> <?php echo $component->function; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="section">
            <h2><?php echo $xml->pricing_policy->title; ?></h2>
            <p><?php echo $xml->pricing_policy->statement; ?></p>
        </section>

        <section class="section">
            <h2><?php echo $xml->security_system->title; ?></h2>
            <p><?php echo $xml->security_system->attestation; ?></p>
            <h3>Компоненты системы защиты:</h3>
            <h4>Сегмент управления:</h4>
            <ul>
                <?php foreach ($xml->security_system->components->management_segment->component as $component): ?>
                    <li><?php echo $component; ?></li>
                <?php endforeach; ?>
            </ul>
             <h4>Клиентский сегмент:</h4>
            <p><?php echo $xml->security_system->components->client_segment->description; ?></p>
        </section>

    </div>
</body>
</html>