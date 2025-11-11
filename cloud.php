<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <title>DataSpace — презентация</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <style>
    body {{ font-family: Arial, Helvetica, sans-serif; background:#f7f7f7; color:#111; padding:20px; }}
    .slide {{ background: white; border-radius:8px; box-shadow: 0 2px 6px rgba(0,0,0,0.08); margin:20px auto; padding:20px; max-width:1000px; }}
    .title {{ font-size:22px; font-weight:700; margin-bottom:10px; }}
    .content {{ font-size:16px; line-height:1.45; white-space:pre-wrap; }}
    .meta {{ color:#666; font-size:13px; margin-top:12px; }}
    footer {{ text-align:center; color:#999; font-size:13px; margin-top:30px; }}
  </style>
</head>
<body>
  <h1>DataSpace — презентация (автоматически сгенерированная)</h1>
  <?php
$slides = [
  {
    "title": "Enterprise-Grade облачная инфраструктура для профессионалов DataSpace",
    "content": "Презентацию подготовили: студенты 3-ИАИТ-103 — Беляев Роман, Гальков Александр, Мельник Игорь. Самара, 2025 г."
  },
  {
    "title": "Кто мы?",
    "content": "DataSpace — ведущий российский оператор коммерческих ЦОДов и облачных сервисов, обеспечивающий непрерывность корпоративной ИТ-инфраструктуры уже 12 лет без простоев. Компания оперирует 1 152 стойками, общей площадью 6 565 м², поддерживает SLA до 100% на colocation и 99,95% для облака. В экосистеме задействованы 43 оператора связи."
  },
  {
    "title": "Вычислительные ресурсы",
    "content": "Облачная платформа DataSpace Cloud предлагает публичные, частные и гибридные облачные решения с SLA 99,95%, оборудована высококлассным железом, поддерживает схемы резервирования N+1 и подключена к более чем 40 операторам связи."
  },
  {
    "title": "Надёжность и безопасность",
    "content": "Установленный уровень доступности: SLA colocation 100%, SLA cloud 99,95%. ЦОД оснащён двойными источниками энергии, системами охлаждения, противопожарной защитой и безопасностью, автоматизированной системой управления зданием, NOVEC 1230."
  },
  {
    "title": "Архитектура платформы",
    "content": "ЦОД DataSpace сертифицирован по стандарту Uptime Institute Tier III Gold, соответствует требованиям ISO 9001:2015, PCI DSS, а также 152-ФЗ."
  },
  {
    "title": "BaaS",
    "content": "Услуга на базе продуктов Veeam: создание, хранение и восстановление резервных копий ВМ в DataSpace Cloud. Восстановление ВМ через техподдержку или Veeam Self-Service Backup Portal."
  },
  {
    "title": "IaaS",
    "content": "Услуга на основе серверного/сетевого оборудования и ПО VMware: предоставляется Виртуальный Дата Центр (vDC) с пулом вычислительных ресурсов и дискового пространства, управление через VMware Cloud Director."
  },
  {
    "title": "Ценовая политика",
    "content": "DataSpace работает по модели B2B — цены обсуждаются индивидуально и не публикуются в открытом доступе."
  },
  {
    "title": "Система защиты DataSpace Cloud",
    "content": "Аттестат соответствия подтверждает соответствие требованиям безопасности информации для систем защиты персональных данных 3-го уровня защищенности (УЗ-3) в соответствии с Приказом ФСТЭК России от 18.02.2013 № 21."
  }
];
foreach ($slides as $i => $s) {
    echo '<section class="slide">';
    echo '<div class="title">' . htmlspecialchars($s['title'], ENT_QUOTES, 'UTF-8') . '</div>';
    echo '<div class="content">' . nl2br(htmlspecialchars($s['content'], ENT_QUOTES, 'UTF-8')) . '</div>';
    echo '<div class="meta">Слайд ' . ($i+1) . ' из ' . count($slides) . '</div>';
    echo '</section>';
}
?>
  <footer>Сгенерировано автоматически из DataSpace.pptx</footer>
</body>
</html>
