<ul class="pagination">
    <?php 
        // crie o arquivo paginator em config
        echo $this->Paginator->first();
        echo $this->Paginator->prev();
        echo $this->Paginator->numbers();
        echo $this->Paginator->next();
        echo $this->Paginator->last();
    ?>
</ul>