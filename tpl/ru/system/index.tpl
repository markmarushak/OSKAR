{include file='header.tpl' title='Interface'}

<h1>Select interface</h1>

{include file='edit.tpl'
url='*'
fields=[
'lang'=>
[
'S',
'Language',
0,
[
'en'=>'English',
'ru'=>'Русский'
],
'default'=>$smarty.session._lang
]
]
btn_text='Select'
}

{include file='footer.tpl'}
