<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/view/template/header.php'; ?>



<div class="row justify-content-center order">
    
    <form>
    <h2>Заявка</h2>
        <div class="form-group">
            <label for="exampleInputEmail1">ФИО</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите ФИО">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Введите ваш email">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Сообщение</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Введите ваше сообщение"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
</div>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/view/template/footer.php'; ?>