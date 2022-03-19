<div class="paging">
    <?php 
        $pageCnt  = ceil($data['cnt'] / $data['limit']); 
        $lastPage = min($data['page'] + 5, $pageCnt); 
        $firstPage = $data['page'];
        if($pageCnt - $data['page'] < 5){
            $firstPage = $pageCnt - 5;
        }
    ?>

    <?php if($data['page'] > 1): ?>
        <a href="<?= $data['link'] ?>&p=1">1</a>
        <span>..</span>
    <?php endif; ?>

    <?php for ($i = $firstPage; $i <= $lastPage; $i++): ?> 
        <a href="<?= $data['link'] ?>&p=<?= $i ?>" 
            class="<?= $data['page'] == $i ? 'active' : ''?>"
        ><?= $i ?></a>
    <?php endfor; ?>

    <?php if(($data['page'] < $pageCnt) && ($pageCnt - $data['page'] > 5)): ?>
        <span>..</span>
        <a href="<?= $data['link'] ?>&p=<?= $pageCnt ?>"><?= $pageCnt ?></a>
    <?php endif; ?>

</div>