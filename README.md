# Laravel - Halló Heimur

Verkefnið felst  því að setja upp og læra að nota Laravel frameworkið sem er nokkuð öflugt framework. Það er hannað til að flýta fyrir s.s. svo að maður þarf ekki alltaf að byrja á öllu frá byrjun. Ákveðið var að kynna sér þetta framework vegna þess að þetta er öflugt og vinsælt framework og virkaði mjög skemmtilegt (og er), frekar en að gera eitthvað standard verkefni. Hér er markiðið að kynnast þessu ágæta frameworki og læra aðeins á það.

Hvernig byrja ég að nota Laravel / Hvernig fæ ég það til þess að virka með kóðanum sem er hér á github?

Fyrir það fyrsta, þá þarf að setja Laravel frameworkið upp og vefþjón, composer og php ef þú ert ekki með það nú þegar, og hér eru góðar leiðbeiningar til þess:
Ef farið er rétt eftir þessum leiðbeiningum ættir þú að geta notað frameworkið strax:

Laravel var sett upp á Linux vél (Ubuntu) eftir þessum leiðbeiningum hér: https://www.howtoforge.com/tutorial/install-laravel-on-ubuntu-for-apache/

Síðan, af því að github leyfir ekki nema max 100 skrár í einu þá þarf að skipta nokkrum skrám út.

1. Taktu afrit (backup) ef eitthvað skildi klúðrast, t.d. með cp skipuninni á Linux vél.

2. Farðu í möppuna sem þú settir Laravel upp í og svo í routes möppuna. Síðan skalltu skipta út web.conf fyrir web.conf sem er á github með því að eyða henni og setja nýju skránna í staðinn.

3. Taktu View möppuna. Eyddu henni og settu View möppuna af Github  staðinn.

4. Taktu tasks möppuna úr view möppunni og settu hana inn  view möppuna.

4. Endurræstu vefþjónin eða reloadaðu stillingunum.

ATH! - Þar sem .env skŕánni í Laravel var breytt þá er notandanafnið root og lykilorðið LUNDIOGFANTA fyrir gagnagrunninn. ATH. að það gæti verið vandamál að fá aðgang að honum í gegnum console s.s. Linux þar sem sá sem þetta skrifar lenti í því, en ef farið er á síða/phpmyadmin þá ættir þú að komast inn þar.

Á síðunni okkar er undirsíða sem heitir tasks farðu á síðan/tasks. Þarna er náð í ,,to do list" í gagnagrunn sem heitir reyndar blog og allt heila klabbið þ.e.s titilinn. Núna getur þú líka sett fyrir aftan tasks/ eitthvað id t.d 1 eða 2 og þá færðu hvað er á  bakvið þennan titil, bulltexta og t.d. Finish my screencast...

Hvað var gert?

Það voru skoðuð fyrstu sjö myndböndin á https://laracasts.com/series/laravel-from-scratch-2017/

Fylgt var eftir þessum myndböndum en mest af þeim var horft á tvisvar, einusinni til að skilja bara hvað væri í gangi og svo aftur til að prófa sjálfur. Í þessum myndböndum var farið í Laravel frameworkið og var þar sýnt hvernig Laravel virkar í hnotskurn. Laravel, eins og önnur framework notar MVC hönnunarmynstrið, s.s. Model, View og Controller. 

Það var farið  að búa til view s.s. það sem við sjáum (basicly Halló Heimur) og svo var farið nokkuð flottann fídus að það er hægt að stytta <?php ?> í bara @ og kóðinn verður mun snrtylegri þannig því þá sést afar vel hvar t.d. if eða for lúppa endar. Svoa var farið í að nota mysql databasinn s.s. búa til töflur í grunninn og birta gögnin á vefsíðunni.

Nú vitum við að t.d. þá notar Laravel Blade vélina til að compila kóðann og þessvegna getum við t.d. notað @  staðinn fyrir <?php og endif og endforeach. Svo var sýnt hvernig hægt er að loda mismunandi viewum í Laravel frameworkinu en það gerist með routing sem er breytt routes->web.php. Aðeins var kynnt sér pínulítið brot á Laravel frameworkinu þar sem þetta er nokkuð stórt framework.
