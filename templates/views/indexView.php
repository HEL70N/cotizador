<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotação App</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>

<body>
    <header>
        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">Sobre</h4>
                        <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Contactos</h4>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white">Twitter</a></li>
                            <li><a href="#" class="text-white">Facebook</a></li>
                            <li><a href="#" class="text-white">Email</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark box-shadow">
            <div class="container d-flex justify-content-between">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <strong>Cotação</strong>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>
    <!-- Fim da NavBar -->

    <!-- Content -->
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="card mb-3">
                    <div class="card-header">Informação de Cliente</div>
                    <div class="card-body">
                        <form action="">
                            <div class="form-group row">
                                <div class="col-4">
                                    <label for="nome">Nome</label>
                                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Helton Rodolfo" required>
                                </div>
                                <div class="col-4">
                                    <label for="empresa">Empresa</label>
                                    <input type="text" class="form-control" id="empresa" name="empresa" placeholder="Acliven Su" required>
                                </div>
                                <div class="col-4">
                                    <label for="email">E-mail</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="heltonrodolfo.it@gmail.com" required>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">Adicionar Produto</div>
                    <div class="card-body">
                        <form action="">
                            <div class="form-group row">
                                <div class="col-3">
                                    <label for="produto">Produto</label>
                                    <input type="text" class="form-control" id="produto" name="produto" placeholder="Guitar Eletrica" required>
                                </div>
                                <div class="col-3">
                                    <label for="tipo">Tipo de Produto</label>
                                    <select name="tipo" id="tipo" class="form-control">
                                        <option value="produto">Produto</option>
                                        <option value="servico">Serviço</option>
                                    </select>
                                </div>
                                <div class="col-3">
                                    <label for="quantidade">Quantidade</label>
                                    <input type="number" class="form-control" id="quantidade" name="quantidade" min="1" max="99999" required>
                                </div>
                                <div class="col-3">
                                    <label for="precoUnitario">Preço Unitário</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">MZN</span>
                                        </div>
                                        <input type="number" class="form-control" id="precoUnitario" name="precoUnitario" min="1" max="99999" placeholder="0.0" required>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <button class="btn btn-success" type="submit">Salvar</button>
                            <button class="btn btn-danger" type="reset">Cancelar</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12">
                <div class="card">
                    <div class="card-header">Resumo da cotação</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Produto</th>
                                        <th>Quantidade</th>
                                        <th>Preço</th>
                                        <th class="text-right">Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Camiseta</td>
                                        <td>1</td>
                                        <td>399.00</td>
                                        <td class="text-right">399.0</td>
                                    </tr>
                                    <tr>
                                        <td>Ukulele</td>
                                        <td>2</td>
                                        <td>250.00</td>
                                        <td class="text-right">500.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right" colspan="3">Subtotal</td>
                                        <td class="text-right">123.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right" colspan="3">Impostos</td>
                                        <td class="text-right">123.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right" colspan="3">Envio</td>
                                        <td class="text-right">50.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right" colspan="4"><b>Total</b>
                                            <h3 class="text-success"><b>799.00</b></h3>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary">Descarregar PDF</button>
                        <button class="btn btn-success">Enviar por Correio</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End content -->

    <!-- Rodapé -->
    <footer class="bg-light text-muted py-5">
        <div class="container">
            <p class="float-right">
                <a href="#">Topo</a>
            </p>
            <p><a href="#">HE L T ON</a> &copy; Todos direitos reservados <?php echo date('Y'); ?></p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>
</body>

</html>