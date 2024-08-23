<ul class="pagination">
    <?php 
        // crie o arquivo paginator em config
        echo $this->Paginator->first();
        echo $this->Paginator->prev();
        echo $this->Paginator->numbers();
        echo $this->Paginator->next();
        echo $this->Paginator->last();
    ?>
    <?= $this->Paginator->counter('range'); ?>
    <?= $this->Paginator->counter('pages'); ?>
</ul>