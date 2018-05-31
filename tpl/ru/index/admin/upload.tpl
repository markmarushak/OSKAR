{strip}
    {include file='admin/header.tpl' title='Настройка главной'}
    <script src="ckeditor/ckeditor.js"></script>

    <form action="{_link module='index/admin/index'}?id={$entity.id}" method="post">
        <input name="id" type="hidden" value="{$list.id}">
        <p>
            <label for="name-home"> Название секции</label>
            <input id="name-home" name="name" type="text" value="{$entity.name}">
        </p>

        <textarea id="editor1" name="content" cols="80" rows="10">

            {$entity.content}
        </textarea>

        <!-- (3): Javascript code to replace textarea with id='editor1' by CKEditor -->
        <script>

            CKEDITOR.replace( 'editor1' );

        </script>

        <input type="submit" value="Отправить">
    </form>

    {include file='admin/footer.tpl'}
{/strip}