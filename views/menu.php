<?php
$menuItems = [
    [
        "title" => "Dashboard",
        "subItems" => []
    ],
    [
        "title" => "Cadastro",
        "subItems" => [
            [
                "title" => "Cliente",
                "url" => "cliente.php"
            ],
            [
                "title" => "Fornecedor",
                "url" => "fornecedor.php"
            ],
            [
                "title" => "Usuário",
                "url" => "usuario.php"
            ]
        ]
    ],
    [
        "title" => "Relatório",
        "subItems" => [
            [
                "title" => "Cliente",
                "url" => "relatorio_cliente.php"
            ],
            [
                "title" => "Faturamento",
                "url" => "relatorio_faturamento.php"
            ]
        ]
    ]
];

// Adicionar os três itens extras ao menu
$menuItems[1]['subItems'][] = [
    "title" => "Produtos",
    "url" => "produtos.php"
];
$menuItems[1]['subItems'][] = [
    "title" => "Perfil de acesso",
    "url" => "perfil_acesso.php"
];
$menuItems[2]['subItems'][] = [
    "title" => "Produtos",
    "url" => "relatorio_produtos.php"
];

// Ordenar os demais itens em ordem alfabética pelo título do item principal
$sortedMenuItems = array_slice($menuItems, 1);
usort($sortedMenuItems, function ($a, $b) {
    return strcmp($a['title'], $b['title']);
});

?>

<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu">
            <li class="sidebar-toggler-wrapper">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler hidden-phone">
                </div>
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            </li>
            <li class="sidebar-search-wrapper">
                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                <form class="sidebar-search" action="extra_search.html" method="POST">
                    <div class="form-container">
                        <div class="input-box">
                            <a href="javascript:;" class="remove"></a>
                            <input type="text" placeholder="Search..."/>
                            <input type="button" class="submit" value=" "/>
                        </div>
                    </div>
                </form>
                <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>
            <?php foreach ($menuItems as $index => $menuItem): ?>
                <?php if ($index === 0): ?>
                    <li class="start active">
                        <a href="index.php">
                            <i class="fa fa-file-text"></i>
                            <span class="title"><?php echo $menuItem['title']; ?></span>
                            <span class="selected"></span>
                        </a>

                        <?php if (!empty($menuItem['subItems'])): ?>
                            <ul class="sub-menu">
                                <?php foreach ($menuItem['subItems'] as $subItem): ?>
                                    <li>
                                        <a href="<?php echo $subItem['url']; ?>"><?php echo $subItem['title']; ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
            <?php foreach ($sortedMenuItems as $menuItem): ?>
                <li class="">
                    <a href="javascript:;">
                        <i class="fa fa-file-text"></i>
                        <span class="title"><?php echo $menuItem['title']; ?></span>
                        <span class="arrow"></span>
                    </a>
                    <?php if (!empty($menuItem['subItems'])): ?>
                        <ul class="sub-menu">
                            <?php foreach ($menuItem['subItems'] as $subItem): ?>
                                <li>
                                    <a href="<?php echo $subItem['url']; ?>"><?php echo $subItem['title']; ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>
<!-- END SIDEBAR -->
