<div class="search-content">
    <div class="form-group">
        <input type="text" onkeyup='searchContent(event)'
            placeholder='Ingresa tu búsqueda..' class="form-control">
    </div>
    <div class="search-btn">
        <i class="fa fa-search"></i>
    </div>

    <div class="results">
        <ul>
            <li>Lorem ipsum dolor sit amet.</li>
            <li>Velit sint ratione qui facere!</li>
            <li>Sequi, sapiente labore. Vel, dolore.</li>
        </ul>
    </div>

</div>

<script>

    if(!siteUrl) {
        var searchLogicUrl= "<?php echo $assets_url ?>/shared/search-logic.php";
        var siteUrl= "<?php echo $url ?>";
    }

</script>