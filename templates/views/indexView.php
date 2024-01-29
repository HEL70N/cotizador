<?php require_once INCLUDES . 'header.php';?>    
<?php require_once INCLUDES . 'navbar.php';?>    

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

    <?php require_once INCLUDES . 'footer.php';?>    