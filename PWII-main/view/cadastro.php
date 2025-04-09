<h1>CADASTRO</h1>
<body>
    <main class="container">
        <form class="row g-3" method="post" action="processa_petshop.php">
            <h1>Cadastre seu cliente</h1>
                <div class="col-md-12">
                    <input type="text" name="Nome_cli" placeholder="Nome" class="form-control" id="inputnome">
                </div>
                <div class="col-md-12">
                    <input type="number" name="Idade_cli" placeholder="Idade" class="form-control" id="inputidade">
                </div>
                <div class="col-12">
                    <input input type="text" name="Email_cli" placeholder="Email" class="form-control" id="inputemail">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Efetuar cadastro</button>
                </div>
        </form>
    </main>
    <div id="tabela-container">
    <button class="close-btn" id="closeBtn">X</button>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>Email</th>
                
            </tr>
        </thead>
        <tbody>
    <?php
        while($linha = mysqli_fetch_array($consulta_petshop)){
            echo'<tr>';
                echo'<td>'.$linha['Id_cli'].'</td>';
                echo'<td>'.$linha['Nome_cli'].'</td>';
                echo'<td>'.$linha['Idade_cli'].'</td>';
                echo'<td>'.$linha['Email_cli'].'</td>';
                    echo'</tr>';
                ?>  
                
            <?php
                }
            ?>

        </tbody>
    </div>
</body>
