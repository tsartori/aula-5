<section class="section">

    <form class="container" method="post" action="<?php route('exercicio/6'); ?>">

        <label class="label">Nome</label>
        <p class="control">
          <input class="input" name="nome" type="text" placeholder="Nome completo">
        </p>
        <label class="label">E-mail</label>
        <p class="control">
          <input class="input" name="email" type="email" placeholder="E-mail">
        </p>
        <label class="label">Data de Nascimento</label>
        <p class="control">
          <input class="input" name="data_nascimento" type="date" placeholder="">
        </p>
        <label class="label">Observação</label>
        <p class="control">
          <textarea class="textarea" name="observacao" placeholder=""></textarea>
        </p>
        <label class="label">Legal</label>
        <p class="control">
          <label class="radio">
            <input type="radio" name="question" value="0">
            Sim
          </label>
          <label class="radio">
            <input type="radio" name="question" value="1">
            Não
          </label>
        </p>
        <p class="control">
          <input type="submit" class="button is-primary" value="Salvar"/>
          <input type="reset" class="button is-link" value="Cancelar"/>
        </p>
    </form>
</section>
