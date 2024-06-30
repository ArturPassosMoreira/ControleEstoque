<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>E-Commerce | Admin</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <?php echo link_tag('assets/css/main.css') ?>
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header fixed-footer">
        <div class="app-header header-shadow bg-slick-carbon header-text-light">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                            data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button"
                        class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            class="p-0 btn">
                                                <?php echo img([
                                                    'src' => 'assets/images/avatars/1.jpg',
                                                    'alt' => 'avatar', 
                                                    'class' => 'rounded-circle', 
                                                    'width' => '42'
                                                ]) ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                      <?php echo session()->name ?>
                                    </div>
                                    <div class="widget-subheading">
                                        Super Usuário - CEO
                                    </div>
                                </div>
                                <div class="widget-content-right header-user-info ml-3">
                                    <a type="button" title="Sair" href="<?= base_url(route_to('signOut')) ?>" 
                                        class="btn-shadow p-1 btn btn-primary btn-sm">
                                        <i class="fa text-white fa-sign-out-alt pr-1 pl-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow bg-slick-carbon sidebar-text-light">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                                data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button"
                            class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">&nbsp;</li>
                            <li>
                                <a href="<?= base_url(route_to('home')) ?>" class="mm-active">
                                    <i class="metismenu-icon pe-7s-monitor"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-box2"></i>
                                    Estoque
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="<?= base_url(route_to('categorias')) ?>">
                                            <i class="metismenu-icon"></i>
                                            Categorias
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url(route_to('produtos')) ?>">
                                            <i class="metismenu-icon">
                                            </i>Produtos
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-cart"></i>
                                    Vendas
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="<?= base_url(route_to('pedidos')) ?>">
                                            <i class="metismenu-icon">
                                            </i>Pedidos
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url(route_to('devolucoes')) ?>">
                                            <i class="metismenu-icon">
                                            </i>Devoluções
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-users"></i>
                                    Comercial
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="<?= base_url(route_to('clientes')) ?>">
                                            <i class="metismenu-icon">
                                            </i>Clientes
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url(route_to('vendedores')) ?>">
                                            <i class="metismenu-icon">
                                            </i>Vendedores
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-graph1"></i>
                                    Relatórios
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="/relatorios">
                                            <i class="metismenu-icon"></i>
                                            Relatórios
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/estatistica">
                                            <i class="metismenu-icon"></i>
                                            Estatistica
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <?php echo $this->renderSection('content') ?>
                </div>
                <div class="app-wrapper-footer">
                    <div class="app-footer">
                        <div class="app-footer__inner">
                            <div class="app-footer-left"></div>
                            <div class="app-footer-right">
                                Todos os direitos rervados <a href="#">&nbsp;DecodeZero&nbsp;</a> &copy; 2021.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
    <?php echo script_tag('assets/scripts/main.js') ?>
    <?php echo $this->renderSection('scripts') ?>
</body>

</html>