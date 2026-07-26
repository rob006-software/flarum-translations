# Turkish inherited translations differences

Translations for Turkish (`tr`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **6** are translated differently and **0** are
translated only in `tr`. Altogether they cover **5** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations |
| --- | --- |
| `ekumanov-inline-audio` | [1](#ekumanov-inline-audio) |
| `ekumanov-new-posts-notice` | [2](#ekumanov-new-posts-notice) |
| `fof-frontpage` | [1](#fof-frontpage) |
| `forumaker-magicbb` | [1](#forumaker-magicbb) |
| `huseyinfiliz-diff` | [1](#huseyinfiliz-diff) |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Flarum 1.x (`-` line) and the translation from `tr` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `ekumanov-inline-audio`

#### [`ekumanov-inline-audio.forum.bbcode_description`](https://weblate.rob006.net/translate/flarum2/ekumanov-inline-audio/tr/?q=context%3A%3D%22ekumanov-inline-audio.forum.bbcode_description%22)

> Embed an audio player: \[player\]URL\[/player\]

```diff
-Ses oynatıcısını ekleyin: [player]URL[/player]
+Ses oynatıcı ekle: [player]URL[/player]
```

Ses <del>oynatıcısını</del><ins>oynatıcı</ins> <del>ekleyin:</del><ins>ekle:</ins> \[player\]URL\[/player\]


### `ekumanov-new-posts-notice`

#### [`ekumanov-new-posts-notice.forum.new_posts_plural`](https://weblate.rob006.net/translate/flarum2/ekumanov-new-posts-notice/tr/?q=context%3A%3D%22ekumanov-new-posts-notice.forum.new_posts_plural%22)

> {count} new replies were added while you were writing.
>
> OK → Post your reply anyway
> Cancel → Read them first (your draft stays open)

```diff
-Siz yazarken {count} yeni yanıt eklendi.
-
-Tamam → Yanıtınızı yine de gönderin
-İptal → Önce bunları okuyun (taslağınız açık kalır)
+Yazarken {count} yeni yanıt eklendi.
+
+Tamam → Yanıtını yine de gönder
+İptal → Önce yanıtları oku (taslağın açık kalır)
```

<del>Siz yazarken</del><ins>Yazarken</ins> {count} yeni yanıt eklendi.<br /><br />Tamam → <del>Yanıtınızı</del><ins>Yanıtını</ins> yine de <del>gönderin</del><ins>gönder</ins><br />İptal → Önce <del>bunları</del><ins>yanıtları</ins> <del>okuyun</del><ins>oku</ins> <del>(taslağınız</del><ins>(taslağın</ins> açık kalır)

#### [`ekumanov-new-posts-notice.forum.new_posts_single`](https://weblate.rob006.net/translate/flarum2/ekumanov-new-posts-notice/tr/?q=context%3A%3D%22ekumanov-new-posts-notice.forum.new_posts_single%22)

> 1 new reply was added while you were writing.
>
> OK → Post your reply anyway
> Cancel → Read it first (your draft stays open)

```diff
-Siz yazarken 1 yeni yanıt eklendi.
-
-Tamam → Yanıtınızı yine de gönderin
-İptal → Önce okuyun (taslağınız açık kalır)
+Yazarken 1 yeni yanıt eklendi.
+
+Tamam → Yanıtını yine de gönder
+İptal → Önce oku (taslağın açık kalır)
```

<del>Siz yazarken</del><ins>Yazarken</ins> 1 yeni yanıt eklendi.<br /><br />Tamam → <del>Yanıtınızı</del><ins>Yanıtını</ins> yine de <del>gönderin</del><ins>gönder</ins><br />İptal → Önce <del>okuyun</del><ins>oku</ins> <del>(taslağınız</del><ins>(taslağın</ins> açık kalır)


### `fof-frontpage`

#### [`core.forum.index_sort.front_button`](https://weblate.rob006.net/translate/flarum2/fof-frontpage/tr/?q=context%3A%3D%22core.forum.index_sort.front_button%22)

> FrontPage

```diff
-ÖnSayfa
+Ana Sayfa
```


### `forumaker-magicbb`

#### [`forumaker-magicbb.forum.composer.image_button`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/tr/?q=context%3A%3D%22forumaker-magicbb.forum.composer.image_button%22)

> Align image

```diff
-Görsel ekle
+Akıllı görsel ekle
```

<del>Görsel</del><ins>Akıllı görsel</ins> ekle


### `huseyinfiliz-diff`

#### [`huseyinfiliz-diff.admin.settings.onlyUnsigned`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/tr/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.onlyUnsigned%22)

> Only &lt;strong&gt;unsigned integers&lt;/strong&gt; are allowed!

```diff
-Yalnızca <strong>işaretsiz tam sayılar</strong> kabul edilir.
+Yalnızca <strong>işaretsiz tam sayılar</strong> kabul edilir!
```

Yalnızca &lt;strong&gt;işaretsiz tam sayılar&lt;/strong&gt; kabul <del>edilir.</del><ins>edilir!</ins>

<!-- {% endraw %} -->
