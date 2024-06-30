<?php echo $this->extend('admin/layout') ?>
<?php echo $this->section('content') ?>
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-network icon-gradient bg-happy-itmeo">
                </i>
            </div>
            <div>
                <?php echo $title; ?>
                <div class="page-title-subheading">
                    <?php echo $subtitle; ?>
                </div>
            </div>
        </div>
        <div class="page-title-actions">
            <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom"
                class="btn-shadow mr-3 btn btn-dark">
                <i class="fa fa-star"></i>
            </button>
            <div class="d-inline-block dropdown">
                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    class="btn-shadow btn btn-info">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="pe-7s-diskette"></i>
                    </span>
                    Nova Categoria
                </button>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Lista de Categorias
                <div class="btn-actions-pane-right">
                    <div role="group" class="btn-group-sm btn-group">
                        <button class="active btn btn-focus">Last Week</button>
                        <button class="btn btn-focus">All Month</button>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Descrição</th>
                            <th class="text-center">Quantidade</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center text-muted">1</td>
                            <td>Bolsas</td>
                            <td class="text-center">1</td>
                            <td class="text-center">
                                <div class="badge badge-success">Ativo</div>
                            </td>
                            <td class="text-center">
                                <button type="button" data-toggle="tooltip" data-placement="top"
                                    data-original-title="editar" class="btn btn-primary btn-sm">
                                    <i class="pe-7s-pen btn-icon-wrapper"></i>
                                </button>
                                 <button type="button" data-toggle="tooltip" data-placement="top"
                                    data-original-title="excluir" class="btn btn-danger btn-sm">
                                    <i class="pe-7s-trash btn-icon-wrapper"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center text-muted">2</td>
                            <td>Calçados</td>
                            <td class="text-center">10</td>
                            <td class="text-center">
                                <div class="badge badge-success">Ativo</div>
                            </td>
                            <td class="text-center">
                                <button type="button" data-toggle="tooltip" data-placement="top"
                                    data-original-title="editar" class="btn btn-primary btn-sm">
                                    <i class="pe-7s-pen btn-icon-wrapper"></i>
                                </button>
                                 <button type="button" data-toggle="tooltip" data-placement="top"
                                    data-original-title="excluir" class="btn btn-danger btn-sm">
                                    <i class="pe-7s-trash btn-icon-wrapper"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center text-muted">3</td>
                            <td>
                                Smartphones
                            </td>
                            <td class="text-center">15</td>
                            <td class="text-center">
                                <div class="badge badge-danger">Inativo</div>
                            </td>
                            <td class="text-center">
                                <button type="button" data-toggle="tooltip" data-placement="top"
                                    data-original-title="editar" class="btn btn-primary btn-sm">
                                    <i class="pe-7s-pen btn-icon-wrapper"></i>
                                </button>
                                 <button type="button" data-toggle="tooltip" data-placement="top"
                                    data-original-title="excluir" class="btn btn-danger btn-sm">
                                    <i class="pe-7s-trash btn-icon-wrapper"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center text-muted">4</td>
                            <td>Instrumentos Musicais</td>
                            <td class="text-center">26</td>
                            <td class="text-center">
                                <div class="badge badge-success">Ativo</div>
                            </td>
                            <td class="text-center">
                                <button type="button" data-toggle="tooltip" data-placement="top"
                                    data-original-title="editar" class="btn btn-primary btn-sm">
                                    <i class="pe-7s-pen btn-icon-wrapper"></i>
                                </button>
                                 <button type="button" data-toggle="tooltip" data-placement="top"
                                    data-original-title="excluir" class="btn btn-danger btn-sm">
                                    <i class="pe-7s-trash btn-icon-wrapper"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="d-block text-center card-footer">       
                <nav class="" aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a href="javascript:void(0);" class="page-link"
                                aria-label="Previous"><span aria-hidden="true">«</span><span
                                    class="sr-only">Previous</span></a></li>
                        <li class="page-item"><a href="javascript:void(0);" class="page-link">1</a></li>
                        <li class="page-item active"><a href="javascript:void(0);" class="page-link">2</a>
                        </li>
                        <li class="page-item"><a href="javascript:void(0);" class="page-link">3</a></li>
                        <li class="page-item"><a href="javascript:void(0);" class="page-link">4</a></li>
                        <li class="page-item"><a href="javascript:void(0);" class="page-link">5</a></li>
                        <li class="page-item"><a href="javascript:void(0);" class="page-link"
                                aria-label="Next"><span aria-hidden="true">»</span><span
                                    class="sr-only">Next</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<?php echo $this->endSection() ?>