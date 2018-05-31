{strip}
{include file='admin/header.tpl' title='Рандомы'}
<div class="info-rand"></div>
<ul type="none" id="blok-info-rand">
{foreach from=$list key=$value item=i}
    <li>{$i.name} - {$i.number}</li>
{/foreach}
</ul>
    <form id="random_form" method="post">
        <p>Введите минимальное значение :</p>
        <input type="text" name="min">
        <br>
        <p>Введите максимальное значение :</p>
        <input type="text" name="max">
        <br>
        <input id="sub" type="submit" name="submit" value="изменить">
    </form>
    <script src="assets/js/sen-rand.js"></script>

{include file='admin/footer.tpl'}

{/strip}