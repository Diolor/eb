<?php get_header(); ?>

<!-- ======================= HERO ======================= -->
<section class="hero">
  <div class="hero-bg" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/IMG_20220526_095047-scaled.jpg')"></div>
  <div class="hero-content container">
    <p class="hero-kicker">
      <span class="de">Initiative aus Berlin-Neukölln · seit 2022</span>
      <span class="en">A grassroots initiative from Berlin-Neukölln · since 2022</span>
      <span class="tr">Berlin-Neukölln'den bir mahalle girişimi · 2022'den beri</span>
    </p>
    <h1>
      <span class="de">Emmauswald <em>bleibt!</em></span>
      <span class="en">The Emmaus Forest <em>stays!</em></span>
      <span class="tr">Emmaus Ormanı <em>kalıyor!</em></span>
    </h1>
    <p class="hero-sub">
      <span class="de">Gemeinsam für den Erhalt unseres Stadtwaldes! Der größte Wald Berlin-Neuköllns steht vor der Zerstörung – und wir haben die Initiative „Emmauswald bleibt!“ ins Leben gerufen, um ihn zu schützen.</span>
      <span class="en">Together for the preservation of our city forest! The largest forest in Berlin-Neukölln is facing destruction – so we founded the initiative "Emmauswald bleibt!" ("The Emmaus Forest stays!") to protect it.</span>
      <span class="tr">Şehir ormanımızın korunması için hep birlikte! Berlin-Neukölln'ün en büyük ormanı yok olma tehlikesiyle karşı karşıya – onu korumak için "Emmauswald bleibt!" ("Emmaus Ormanı kalıyor!") girişimini kurduk.</span>
    </p>
    <div class="hero-actions">
      <a class="btn btn-accent" href="<?php echo esc_url( ewb_petition_url() ); ?>" target="_blank" rel="noopener">
        <span class="de">✍️ Petition unterschreiben</span><span class="en">✍️ Sign the petition</span><span class="tr">✍️ Dilekçeyi imzala</span>
      </a>
      <a class="btn btn-ghost" href="#spenden">
        <span class="de">💚 Spenden</span><span class="en">💚 Donate</span><span class="tr">💚 Bağış yap</span>
      </a>
    </div>
  </div>
  <a class="hero-scroll" href="#stats" aria-label="Nach unten scrollen / Scroll down">▾</a>
</section>

<!-- ======================= STATS ======================= -->
<section class="stats" id="stats">
  <div class="container stats-grid">
    <div class="stat reveal">
      <strong data-count="4">4</strong>
      <span class="de">Hektar Wald – der größte offizielle Wald Neuköllns</span>
      <span class="en">hectares of forest – Neukölln's largest official forest</span>
      <span class="tr">hektar orman – Neukölln'ün en büyük resmî ormanı</span>
    </div>
    <div class="stat reveal">
      <strong data-count="725">725</strong>
      <span class="de">kartierte Bäume, mind. 230 davon als erhaltenswert eingestuft</span>
      <span class="en">mapped trees, at least 230 classified as worthy of preservation</span>
      <span class="tr">kayıtlı ağaç – en az 230'u korunmaya değer olarak sınıflandırıldı</span>
    </div>
    <div class="stat reveal">
      <strong data-count="20">20</strong>
      <span class="de">nachgewiesene geschützte Vogelarten – u.&nbsp;a. Habicht &amp; Waldohreule</span>
      <span class="en">documented protected bird species – incl. goshawk &amp; long-eared owl</span>
      <span class="tr">belgelenmiş korunan kuş türü – çakır kuşu ve kulaklı orman baykuşu dahil</span>
    </div>
    <div class="stat reveal">
      <strong data-count="22000">22.000</strong>
      <span class="de">Unterschriften für den Erhalt des Emmauswaldes</span>
      <span class="en">signatures for the preservation of the Emmaus Forest</span>
      <span class="tr">Emmaus Ormanı'nın korunması için imza</span>
    </div>
  </div>
</section>

<!-- ======================= DER WALD / ABOUT ======================= -->
<section class="section" id="wald">
  <div class="container">
    <div class="section-head reveal">
      <p class="eyebrow"><span class="de">Der Emmauswald</span><span class="en">The Emmaus Forest</span><span class="tr">Emmaus Ormanı</span></p>
      <h2>
        <span class="de">Die wichtigsten Informationen auf einen Blick</span>
        <span class="en">The most important information at a glance</span>
        <span class="tr">Bir bakışta en önemli bilgiler</span>
      </h2>
    </div>

    <div class="split">
      <div class="split-text reveal">
        <ul class="facts">
          <li>
            <h3><span class="de">📍 Standort</span><span class="en">📍 Location</span><span class="tr">📍 Konum</span></h3>
            <p class="de">Der Emmauswald befindet sich auf dem ehemaligen Emmauskirchhof, in unmittelbarer Nähe zum S-Bahnhof Hermannstraße in Berlin Neukölln.</p>
            <p class="en">The Emmaus Forest is located on the former Emmaus church cemetery (Emmauskirchhof), right next to the Hermannstraße S-Bahn station in Berlin-Neukölln.</p>
            <p class="tr">Emmaus Ormanı, Berlin-Neukölln'de Hermannstraße S-Bahn istasyonunun hemen yanındaki eski Emmaus kilise mezarlığı (Emmauskirchhof) arazisinde yer alıyor.</p>
          </li>
          <li>
            <h3><span class="de">🌳 Der Wald</span><span class="en">🌳 The forest</span><span class="tr">🌳 Orman</span></h3>
            <p class="de">Mit knapp 4 Hektar, über 700 Bäumen und vielen Tierarten ist er der größte offizielle Wald Neuköllns und ein einzigartiges Biotop mit besonderem ökologischen Wert in einem stark belasteten Kiez (Umweltgerechtigkeitsatlas Berlin).</p>
            <p class="en">With almost 4 hectares, over 700 trees and many animal species, it is Neukölln's largest official forest and a unique biotope of special ecological value in a heavily burdened neighbourhood (Berlin Environmental Justice Atlas).</p>
            <p class="tr">Yaklaşık 4 hektarlık alanı, 700'den fazla ağacı ve birçok hayvan türüyle Neukölln'ün en büyük resmî ormanı ve ağır çevre yükü altındaki bir mahallede (Berlin Çevre Adaleti Atlası) özel ekolojik değere sahip eşsiz bir biyotoptur.</p>
          </li>
          <li>
            <h3><span class="de">🏗️ Baupläne</span><span class="en">🏗️ Development plans</span><span class="tr">🏗️ İmar planları</span></h3>
            <p class="de">Die BUWOG plant, mindestens die Hälfte des Waldes zu roden, um Eigentumswohnungen zu errichten.</p>
            <p class="en">BUWOG plans to clear at least half of the forest in order to build owner-occupied condominiums.</p>
            <p class="tr">BUWOG, mülk konutlar inşa etmek için ormanın en az yarısını kesmeyi planlıyor.</p>
          </li>
          <li>
            <h3><span class="de">🎯 Unser Ziel</span><span class="en">🎯 Our goal</span><span class="tr">🎯 Hedefimiz</span></h3>
            <p class="de">Seit 2022 setzen wir uns für den Erhalt des gesamten Waldes ein – und schlagen gleichzeitig den Bau von höherstöckigen Sozialwohnungen auf der angrenzenden Brachfläche, die ebenfalls Teil des Bebauungsplans ist, vor, um der Wohnungsnot in Berlin nachhaltig und sozial entgegenzuwirken.</p>
            <p class="en">Since 2022 we have been fighting for the preservation of the entire forest – while proposing the construction of taller social housing on the adjacent brownfield site, which is also part of the development plan, as a sustainable and socially just answer to Berlin's housing shortage.</p>
            <p class="tr">2022'den beri ormanın tamamının korunması için mücadele ediyoruz – aynı zamanda Berlin'deki konut sıkıntısına sürdürülebilir ve sosyal bir çözüm olarak, imar planının parçası olan bitişikteki boş arazide daha yüksek katlı sosyal konutlar yapılmasını öneriyoruz.</p>
          </li>
        </ul>
        <p class="de">Wenn ihr uns unterstützen wollt, findet ihr hier weitere Informationen, Kontaktmöglichkeiten sowie unsere <a href="<?php echo esc_url( ewb_petition_url() ); ?>" target="_blank" rel="noopener">Petition</a>, die ihr direkt unterschreiben könnt!</p>
        <p class="en">If you want to support us, you will find further information and contact options here, as well as our <a href="<?php echo esc_url( ewb_petition_url() ); ?>" target="_blank" rel="noopener">petition</a>, which you can sign right away!</p>
        <p class="tr">Bizi desteklemek istiyorsanız burada daha fazla bilgi, iletişim seçenekleri ve hemen imzalayabileceğiniz <a href="<?php echo esc_url( ewb_petition_url() ); ?>" target="_blank" rel="noopener">dilekçemizi</a> bulabilirsiniz!</p>
      </div>
      <figure class="split-img reveal">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/IMG_20220522_090711-scaled.jpg" alt="Lichtung im Emmauswald / Clearing in the Emmaus Forest" loading="lazy">
        <figcaption>
          <span class="de">Der Emmauswald – ein artenreiches Biotop mitten in Neukölln</span>
          <span class="en">The Emmaus Forest – a biodiverse biotope in the heart of Neukölln</span>
          <span class="tr">Emmaus Ormanı – Neukölln'ün kalbinde tür bakımından zengin bir biyotop</span>
        </figcaption>
      </figure>
    </div>

    <div class="story reveal">
      <h2>
        <span class="de">Was ist passiert und warum ist der Wald in Gefahr?</span>
        <span class="en">What happened, and why is the forest in danger?</span>
        <span class="tr">Ne oldu ve orman neden tehlikede?</span>
      </h2>
      <div class="de">
        <p>Seit über 10 Jahren wird auf politischer Ebene über die Bebauung des westlichen Teils des Emmausfriedhofs diskutiert, der heute auch offiziell nach Landeswaldgesetz als Wald eingestuft ist. Hier plant die BUWOG (eine Tochtergesellschaft der VONOVIA) ein Neubau-Areal mit 490 Wohnungseinheiten zum Eigentum. Nachdem sich die Politiker*innen des Bezirks im Frühjahr 2023 einheitlich gegen eine Bebauung und für die Erhaltung des Waldes ausgesprochen haben, hat das Bezirksamt Neukölln beschlossen, das Verfahren vorerst einzustellen. Kurz darauf hat der Senat im Sommer 2023 das Verfahren an sich gezogen und möchte dieses schnellstmöglich umsetzen.</p>
        <p>Wir, die Initiative Emmauswald_bleibt!, kritisieren dieses Vorgehen sowie das aktuelle Bauvorhaben: Wir brauchen im Kiez keine weiteren Wohnungen im Hochpreissegment, sondern bezahlbaren, sozialen und umweltgerechten Wohnraum. Im direkten Umkreis vom Wald stehen mehrere Wohnungen zur Miete und zum Kauf seit langer Zeit frei – weil sie einfach zu teuer sind – dazu gibt es zahlreiche Artikel im Netz. Auf der anliegenden Brache am Wald (ebenso Teil des Bebauungsplans) könnten seit Jahren und jederzeit bezahlbare Wohnungen entstehen, das fordern auch wir! Die Bebauung des Emmauswaldes mit Eigentumswohnungen jedoch hätte nicht nur negative ökologische Auswirkungen, sondern würde auch die soziale Situation im Kiez nicht verbessern. Dies gilt es durch öffentlichen Druck zu verhindern!</p>
      </div>
      <div class="en">
        <p>For more than 10 years there has been political debate about developing the western part of the Emmaus cemetery, which today is also officially classified as forest under the Berlin State Forest Act. Here, BUWOG (a subsidiary of VONOVIA) is planning a new-build complex of 490 owner-occupied apartments. After the district's politicians unanimously spoke out against development and in favour of preserving the forest in spring 2023, the Neukölln district office decided to suspend the planning procedure for the time being. Shortly afterwards, in summer 2023, the Berlin Senate took over the procedure and intends to push it through as quickly as possible.</p>
        <p>We, the initiative Emmauswald_bleibt!, criticise this approach as well as the current development project: our neighbourhood does not need more high-priced apartments, but affordable, social and environmentally just housing. In the immediate vicinity of the forest, several apartments for rent and sale have stood empty for a long time – simply because they are too expensive – as numerous articles online document. On the adjacent brownfield next to the forest (also part of the development plan), affordable housing could have been built years ago, and could be built at any time – that is exactly what we demand! Building condominiums on the Emmaus Forest, however, would not only have negative ecological consequences, it would also do nothing to improve the social situation in the neighbourhood. This must be prevented through public pressure!</p>
      </div>
      <div class="tr">
        <p>On yılı aşkın süredir, bugün Berlin Eyalet Orman Yasası'na göre resmî olarak orman statüsünde olan Emmaus mezarlığının batı bölümünün imara açılması siyasi düzeyde tartışılıyor. BUWOG (VONOVIA'nın bir yan kuruluşu) burada 490 mülk konutluk yeni bir yapı kompleksi planlıyor. İlçe siyasetçileri 2023 baharında oy birliğiyle imara karşı ve ormanın korunmasından yana tavır aldıktan sonra, Neukölln İlçe İdaresi süreci şimdilik durdurmaya karar verdi. Kısa bir süre sonra, 2023 yazında Berlin Senatosu süreci kendi üzerine aldı ve en kısa sürede hayata geçirmek istiyor.</p>
        <p>Biz, Emmauswald_bleibt! girişimi olarak bu yaklaşımı ve mevcut inşaat projesini eleştiriyoruz: Mahallemizin yüksek fiyat segmentinde daha fazla konuta değil; ödenebilir, sosyal ve çevre adaletine uygun konutlara ihtiyacı var. Ormanın hemen çevresinde birçok kiralık ve satılık daire uzun süredir boş duruyor – çünkü fiyatları çok yüksek – internette bu konuda çok sayıda haber var. Ormanın bitişiğindeki boş arazide (o da imar planının parçası) yıllardır her an ödenebilir konutlar yapılabilirdi; biz de tam olarak bunu talep ediyoruz! Emmaus Ormanı'na mülk konutlar inşa etmek ise yalnızca olumsuz ekolojik sonuçlar doğurmakla kalmaz, mahalledeki sosyal durumu da hiç iyileştirmez. Bunu kamuoyu baskısıyla önlemeliyiz!</p>
      </div>
    </div>
  </div>
</section>

<!-- ======================= FULL-BLEED BAND ======================= -->
<section class="band" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/drohnenflug-c3bcber-gelc3a4nde-des-zukc3bcnftigen-neumarien.webp')">
  <div class="band-inner container reveal">
    <blockquote>
      <p class="de">„Der Verlust dieser Waldfläche würde sich voraussichtlich besonders negativ auf das Stadtklima auswirken.“</p>
      <p class="en">"The loss of this forest area would likely have a particularly negative impact on the urban climate."</p>
      <p class="tr">"Bu orman alanının kaybı, büyük olasılıkla şehir iklimini özellikle olumsuz etkileyecektir."</p>
      <cite><span class="de">— Berliner Forsten, Stellungnahme zum Waldstatus</span><span class="en">— Berlin Forestry Authority (Berliner Forsten), statement on the forest status</span><span class="tr">— Berlin Orman İdaresi (Berliner Forsten), orman statüsüne ilişkin görüş</span></cite>
    </blockquote>
  </div>
</section>

<!-- ======================= FORDERUNGEN / DEMANDS ======================= -->
<section class="section section-alt" id="forderungen">
  <div class="container">
    <div class="section-head reveal">
      <p class="eyebrow"><span class="de">Unsere Forderungen</span><span class="en">Our demands</span><span class="tr">Taleplerimiz</span></p>
      <h2><span class="de">Was fordern wir?</span><span class="en">What do we demand?</span><span class="tr">Ne talep ediyoruz?</span></h2>
    </div>

    <div class="cards">
      <article class="card reveal">
        <div class="card-icon">🌲</div>
        <h3><span class="de">Erhalt des gesamten Waldes</span><span class="en">Preservation of the entire forest</span><span class="tr">Ormanın tamamının korunması</span></h3>
        <div class="de">
          <p>Der Emmauswald hat einen essentiellen ökologischen Wert für den Kiez und die Stadt. Seit über 40 Jahren wird das ehemalige Friedhofsgelände nicht mehr aktiv genutzt, wodurch sich ein artenreicher Wald entwickelt hat. Laut Kartierung des Bezirks (Stand 2013) stehen hier 725 Bäume, von denen mindestens 230 als erhaltenswert eingestuft wurden. Darunter befinden sich viele besonders wertvolle Bestandsbäume mit Stammumfängen über 130 cm, unter denen sich Linden, Eichen, Ahorn und Kastanien befinden.</p>
          <p>Es wurden ca. 20 geschützte Vogelarten nachgewiesen, darunter streng geschützte oder seltene Arten wie der Habicht, Grünspecht, die Waldohreule oder der Mäusebussard. Auch Igel und Füchse haben hier ein Zuhause. Seltene Insekten lieben den Ort, da hier Totholz und Laub liegen bleibt. Sträucher wachsen wild und bieten weiteren Tieren Schutzorte. Die Bodenqualität ist hervorragend. Selbst wenn „nur“ die Hälfte des Waldes gerodet wird, zerstört dieser Eingriff unweigerlich das gesamte Ökosystem.</p>
          <p><strong>Statt einem artenreichen Biotop mit vielfältiger Flora und Fauna sollen hier Neubauten mit reinen Eigentumswohnungen und Tiefgaragen entstehen. Wir sagen Nein!</strong></p>
        </div>
        <div class="en">
          <p>The Emmaus Forest has essential ecological value for the neighbourhood and the city. The former cemetery grounds have not been actively used for over 40 years, allowing a species-rich forest to develop. According to the district's tree survey (as of 2013), 725 trees stand here, at least 230 of which have been classified as worthy of preservation. Among them are many particularly valuable mature trees with trunk circumferences of over 130 cm, including lindens, oaks, maples and chestnuts.</p>
          <p>Around 20 protected bird species have been documented, including strictly protected or rare species such as the goshawk, green woodpecker, long-eared owl and common buzzard. Hedgehogs and foxes also have a home here. Rare insects love this place, because deadwood and leaves are left to lie. Shrubs grow wild and offer shelter to even more animals. The soil quality is outstanding. Even if "only" half of the forest is cleared, this intervention will inevitably destroy the entire ecosystem.</p>
          <p><strong>Instead of a species-rich biotope with diverse flora and fauna, new buildings with nothing but condominiums and underground garages are to be built here. We say no!</strong></p>
        </div>
        <div class="tr">
          <p>Emmaus Ormanı, mahalle ve şehir için temel ekolojik değere sahiptir. Eski mezarlık arazisi 40 yılı aşkın süredir aktif olarak kullanılmıyor ve bu sayede tür bakımından zengin bir orman gelişti. İlçenin ağaç envanterine göre (2013 itibarıyla) burada 725 ağaç bulunuyor ve bunların en az 230'u korunmaya değer olarak sınıflandırıldı. Aralarında gövde çevresi 130 cm'nin üzerinde olan ıhlamur, meşe, akçaağaç ve kestane gibi özellikle değerli yaşlı ağaçlar var.</p>
          <p>Yaklaşık 20 korunan kuş türü belgelendi; aralarında çakır kuşu, yeşil ağaçkakan, kulaklı orman baykuşu ve şahin gibi sıkı korunan veya nadir türler var. Kirpiler ve tilkiler de burada yaşıyor. Ölü ağaçlar ve yapraklar yerinde bırakıldığı için nadir böcekler bu alanı çok seviyor. Çalılar doğal olarak büyüyor ve başka hayvanlara barınak sağlıyor. Toprak kalitesi mükemmel. Ormanın "yalnızca" yarısı kesilse bile bu müdahale tüm ekosistemi kaçınılmaz olarak yok eder.</p>
          <p><strong>Tür bakımından zengin, çeşitli flora ve faunaya sahip bir biyotopun yerine burada yalnızca mülk konutlardan ve yeraltı otoparklarından oluşan yeni binalar yapılacak. Biz hayır diyoruz!</strong></p>
        </div>
      </article>

      <article class="card reveal">
        <div class="card-icon">🏘️</div>
        <h3><span class="de">Sozialwohnungen statt Eigentumswohnungen</span><span class="en">Social housing instead of condominiums</span><span class="tr">Mülk konut yerine sosyal konut</span></h3>
        <div class="de">
          <p>Wir fordern den Bau von bezahlbaren Sozialwohnungen auf der angrenzenden Brachfläche und/oder bereits versiegelten Flächen in der Nähe. Der Wald darf nicht teuren Eigentumswohnungen zum Opfer fallen, die als Geldanlage dienen und die sich die wenigsten Menschen hier leisten können. Zudem sind wir der Meinung, dass bei einem berlinweiten Problem wie der Wohnungsnot auch bezirksübergreifend nach Lösungen geschaut, und statt eines Biotops eher eine der zahlreichen versiegelten Flächen in der Nähe bebaut werden sollte.</p>
          <p><strong>Wir setzen uns für eine Lösung ein, die den Bedürfnissen der Menschen in unserem Kiez gerecht wird. Wohnen ist kein Luxus, sondern ein Grundbedürfnis!</strong></p>
        </div>
        <div class="en">
          <p>We demand the construction of affordable social housing on the adjacent brownfield site and/or on already sealed surfaces nearby. The forest must not fall victim to expensive condominiums that serve as investment assets and that hardly anyone here can afford. Furthermore, we believe that a Berlin-wide problem like the housing shortage requires solutions across district boundaries – and that one of the numerous sealed surfaces nearby should be built on rather than a biotope.</p>
          <p><strong>We stand for a solution that meets the needs of the people in our neighbourhood. Housing is not a luxury, it is a basic need!</strong></p>
        </div>
        <div class="tr">
          <p>Bitişikteki boş arazide ve/veya yakındaki halihazırda betonlaşmış alanlarda ödenebilir sosyal konutlar yapılmasını talep ediyoruz. Orman, yatırım aracı olarak kullanılan ve burada neredeyse kimsenin karşılayamayacağı pahalı mülk konutlara kurban edilmemelidir. Ayrıca konut sıkıntısı gibi tüm Berlin'i ilgilendiren bir sorunda ilçe sınırlarını aşan çözümler aranması ve bir biyotop yerine yakındaki çok sayıda betonlaşmış alandan birinin imara açılması gerektiğine inanıyoruz.</p>
          <p><strong>Mahallemizdeki insanların ihtiyaçlarına cevap veren bir çözümü savunuyoruz. Barınma lüks değil, temel bir ihtiyaçtır!</strong></p>
        </div>
      </article>

      <article class="card reveal">
        <div class="card-icon">⚖️</div>
        <h3><span class="de">Kein Wohnungsbau auf Kosten der Natur</span><span class="en">No housing at nature's expense</span><span class="tr">Doğa pahasına konut yapımına hayır</span></h3>
        <div class="de">
          <p>Wir befinden uns in einer Zeit multipler Krisen, deshalb müssen wir verschiedene Aspekte abwägen und neue Lösungen finden. Sozialer Wohnungsbau darf nicht auf Kosten der Natur umgesetzt werden. Es braucht Druck von unten, von den Bürger*innen, damit die Politik die Bebauung ablehnt.</p>
          <p>Wir brauchen im Kiez keine weiteren Wohnungen im hohen Preissegment. Direkt gegenüber des Waldes stehen momentan noch Wohnungen im Neubau leer, einfach weil sie zu teuer sind. Eine Bebauung des EmmausWaldes hätte also nicht nur negative ökologische Einflüsse, sondern würde auch die soziale Situation im Kiez nicht verbessern.</p>
        </div>
        <div class="en">
          <p>We live in a time of multiple crises, so we must weigh different aspects and find new solutions. Social housing must not be built at the expense of nature. It takes pressure from below, from the citizens, so that politicians reject the development.</p>
          <p>Our neighbourhood does not need more apartments in the high price segment. Directly opposite the forest, newly built apartments are still standing empty – simply because they are too expensive. Building on the Emmaus Forest would therefore not only have negative ecological impacts, it would also do nothing to improve the social situation in the neighbourhood.</p>
        </div>
        <div class="tr">
          <p>Çoklu krizler çağında yaşıyoruz; bu yüzden farklı yönleri tartıp yeni çözümler bulmalıyız. Sosyal konut, doğa pahasına inşa edilmemelidir. Siyasetin imarı reddetmesi için aşağıdan, yurttaşlardan gelen baskı gerekiyor.</p>
          <p>Mahallemizin yüksek fiyat segmentinde daha fazla konuta ihtiyacı yok. Ormanın tam karşısındaki yeni binalarda daireler hâlâ boş duruyor – sırf çok pahalı oldukları için. Emmaus Ormanı'nın imara açılması yalnızca olumsuz ekolojik etkiler yaratmakla kalmaz, mahalledeki sosyal durumu da iyileştirmez.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- ======================= MITMACHEN / TAKE ACTION ======================= -->
<section class="section" id="mitmachen">
  <div class="container">
    <div class="section-head reveal">
      <p class="eyebrow"><span class="de">Mitmachen</span><span class="en">Take action</span><span class="tr">Katıl</span></p>
      <h2><span class="de">Was kannst du tun, um den Wald zu unterstützen?</span><span class="en">What can you do to support the forest?</span><span class="tr">Ormanı desteklemek için ne yapabilirsin?</span></h2>
    </div>
    <div class="actions-grid">
      <a class="action reveal" href="<?php echo esc_url( ewb_telegram_url() ); ?>" target="_blank" rel="noopener">
        <span class="action-num">01</span>
        <h3><span class="de">Initiative beitreten</span><span class="en">Join the initiative</span><span class="tr">Girişime katıl</span></h3>
        <p class="de">Werde Mitglied unserer Telegramgruppe, in der fortlaufend Infos zum aktuellen Stand, Möglichkeiten zur Beteiligung oder Termine für Treffen geteilt werden.</p>
        <p class="en">Become a member of our Telegram group, where we continuously share updates on the current situation, ways to get involved and dates for meetings.</p>
        <p class="tr">Güncel durum, katılım olanakları ve toplantı tarihlerinin sürekli paylaşıldığı Telegram grubumuza üye ol.</p>
      </a>
      <div class="action reveal">
        <span class="action-num">02</span>
        <h3><span class="de">Aufmerksamkeit schaffen</span><span class="en">Spread the word</span><span class="tr">Farkındalık yarat</span></h3>
        <p class="de">Erzähle Nachbar*innen, Freund*innen, Bekannten, Familie etc. vom Emmauswald, verteile Flyer oder teile unsere Beiträge in den Sozialen Medien.</p>
        <p class="en">Tell your neighbours, friends, acquaintances, family etc. about the Emmaus Forest, hand out flyers or share our posts on social media.</p>
        <p class="tr">Komşularına, arkadaşlarına, tanıdıklarına, ailene Emmaus Ormanı'ndan bahset, el ilanları dağıt veya sosyal medya paylaşımlarımızı paylaş.</p>
      </div>
      <a class="action reveal" href="<?php echo esc_url( ewb_petition_url() ); ?>" target="_blank" rel="noopener">
        <span class="action-num">03</span>
        <h3><span class="de">Petition unterschreiben</span><span class="en">Sign the petition</span><span class="tr">Dilekçeyi imzala</span></h3>
        <p class="de">Setze mit deiner Unterschrift ein Zeichen für den Erhalt des Emmauswaldes. Die Petition gegen die Bebauung des ehemaligen Friedhofs hat zum jetzigen Stand über 22.000 Unterschriften.</p>
        <p class="en">Make a statement for the preservation of the Emmaus Forest with your signature. The petition against the development of the former cemetery currently has over 22,000 signatures.</p>
        <p class="tr">İmzanla Emmaus Ormanı'nın korunması için bir işaret ver. Eski mezarlığın imara açılmasına karşı dilekçe şu ana kadar 22.000'den fazla imzaya ulaştı.</p>
      </a>
      <div class="action reveal">
        <span class="action-num">04</span>
        <h3><span class="de">Politische Unterstützung</span><span class="en">Political support</span><span class="tr">Siyasi destek</span></h3>
        <p class="de">Schreibe eine Mail oder einen Brief an die zuständigen Abgeordneten und komm zu Kundgebungen und Sitzungen des Abgeordnetenhauses.</p>
        <p class="en">Write an email or a letter to the responsible members of parliament and come to rallies and sessions of the Berlin House of Representatives.</p>
        <p class="tr">Sorumlu milletvekillerine e-posta veya mektup yaz; mitinglere ve Berlin Eyalet Meclisi oturumlarına katıl.</p>
      </div>
    </div>
    <p class="rally reveal">
      <span class="de">Gemeinsam können wir einen Unterschied machen und dafür sorgen, dass der <strong>#Emmauswald_bleibt!!!</strong></span>
      <span class="en">Together we can make a difference and make sure that the <strong>#Emmauswald stays!!!</strong></span>
      <span class="tr">Birlikte fark yaratabilir ve <strong>#Emmauswald'ın kalmasını</strong> sağlayabiliriz!!!</span>
    </p>
  </div>
</section>

<!-- ======================= NEWS ======================= -->
<section class="section section-alt" id="news">
  <div class="container">
    <div class="section-head reveal">
      <p class="eyebrow">News</p>
      <h2><span class="de">Aktuelles aus der Initiative</span><span class="en">Latest from the initiative</span><span class="tr">Girişimden son haberler</span></h2>
    </div>

    <div class="news-list">

      <?php
      $ewb_news = new WP_Query(
        array(
          'posts_per_page'      => -1,
          'ignore_sticky_posts' => true,
        )
      );
      $ewb_news_i     = 0;
      $ewb_news_total = (int) $ewb_news->post_count;
      while ( $ewb_news->have_posts() ) :
        $ewb_news->the_post();
        $ewb_news_i++;
        if ( 4 === $ewb_news_i ) :
          ?>
          <div class="list-more" id="news-more" hidden>
          <?php
        endif;
        ?>
        <article class="news-item reveal">
          <div class="news-meta"><time datetime="<?php echo esc_attr( get_the_date( 'Y-m-d' ) ); ?>"><?php echo esc_html( get_the_date( 'd.m.Y' ) ); ?></time></div>
          <h3><?php the_title(); ?></h3>
          <div class="news-content">
            <?php the_content(); ?>
          </div>
        </article>
        <?php
      endwhile;
      wp_reset_postdata();

      if ( $ewb_news_total > 3 ) :
        ?>
          </div>
          <button class="expand-toggle" type="button" data-expand="news-more">
            <span class="de">Ältere News anzeigen (<?php echo (int) ( $ewb_news_total - 3 ); ?>)</span>
            <span class="en">Show older news (<?php echo (int) ( $ewb_news_total - 3 ); ?>)</span>
            <span class="tr">Daha eski haberleri göster (<?php echo (int) ( $ewb_news_total - 3 ); ?>)</span>
          </button>
        <?php
      endif;

      if ( 0 === $ewb_news_total ) :
        ?>
        <p class="muted">
          <span class="de">Noch keine News vorhanden. Importiert <code>data/content.xml</code> oder legt Beiträge an.</span>
          <span class="en">No news yet. Import <code>data/content.xml</code> or create posts.</span>
          <span class="tr">Henüz haber yok. <code>data/content.xml</code> dosyasını içe aktarın veya gönderi oluşturun.</span>
        </p>
        <?php
      endif;
      ?>

    </div>
  </div>
</section>

<!-- ======================= KALENDER ======================= -->
<section class="section" id="kalender">
  <div class="container">
    <div class="section-head reveal">
      <p class="eyebrow"><span class="de">Kalender</span><span class="en">Calendar</span><span class="tr">Takvim</span></p>
      <h2><span class="de">Veranstaltungen</span><span class="en">Events</span><span class="tr">Etkinlikler</span></h2>
      <?php
      $ewb_today    = current_time( 'Y-m-d' );
      $ewb_upcoming = new WP_Query(
        array(
          'post_type'      => 'ewb_event',
          'posts_per_page' => -1,
          'meta_key'       => 'ewb_event_date',
          'orderby'        => 'meta_value',
          'order'          => 'ASC',
          'meta_query'     => array(
            array(
              'key'     => 'ewb_event_date',
              'value'   => $ewb_today,
              'compare' => '>=',
              'type'    => 'DATE',
            ),
          ),
        )
      );
      if ( ! $ewb_upcoming->have_posts() ) :
        ?>
        <p class="muted">
          <span class="de">Es sind derzeit keine anstehenden Veranstaltungen vorhanden. Aktuelle Termine werden in unserer <a href="<?php echo esc_url( ewb_telegram_url() ); ?>" target="_blank" rel="noopener">Telegramgruppe</a> geteilt.</span>
          <span class="en">There are currently no upcoming events. New dates are shared in our <a href="<?php echo esc_url( ewb_telegram_url() ); ?>" target="_blank" rel="noopener">Telegram group</a>.</span>
          <span class="tr">Şu anda yaklaşan etkinlik bulunmuyor. Yeni tarihler <a href="<?php echo esc_url( ewb_telegram_url() ); ?>" target="_blank" rel="noopener">Telegram grubumuzda</a> paylaşılıyor.</span>
        </p>
      <?php endif; ?>
    </div>

    <?php if ( $ewb_upcoming->have_posts() ) : ?>
      <div class="timeline">
        <?php
        while ( $ewb_upcoming->have_posts() ) :
          $ewb_upcoming->the_post();
          ?>
          <div class="timeline-item reveal">
            <div class="timeline-date"><?php echo ewb_timeline_date_html( get_post_meta( get_the_ID(), 'ewb_event_date', true ) ); ?></div>
            <div class="timeline-body">
              <?php the_content(); ?>
            </div>
          </div>
          <?php
        endwhile;
        wp_reset_postdata();
        ?>
      </div>
    <?php endif; ?>

    <?php
    $ewb_past = new WP_Query(
      array(
        'post_type'      => 'ewb_event',
        'posts_per_page' => -1,
        'meta_key'       => 'ewb_event_date',
        'orderby'        => 'meta_value',
        'order'          => 'DESC',
        'meta_query'     => array(
          array(
            'key'     => 'ewb_event_date',
            'value'   => $ewb_today,
            'compare' => '<',
            'type'    => 'DATE',
          ),
        ),
      )
    );
    if ( $ewb_past->have_posts() ) :
      $ewb_past_i     = 0;
      $ewb_past_total = (int) $ewb_past->post_count;
      ?>
      <h3 class="timeline-title reveal"><span class="de">Vergangene Veranstaltungen</span><span class="en">Past events</span><span class="tr">Geçmiş etkinlikler</span></h3>
      <div class="timeline">
        <?php
        while ( $ewb_past->have_posts() ) :
          $ewb_past->the_post();
          $ewb_past_i++;
          if ( 4 === $ewb_past_i ) :
            ?>
            <div class="list-more" id="events-more" hidden>
            <?php
          endif;
          ?>
          <div class="timeline-item reveal">
            <div class="timeline-date"><?php echo ewb_timeline_date_html( get_post_meta( get_the_ID(), 'ewb_event_date', true ) ); ?></div>
            <div class="timeline-body">
              <?php the_content(); ?>
            </div>
          </div>
          <?php
        endwhile;
        wp_reset_postdata();
        if ( $ewb_past_total > 3 ) :
          ?>
          </div>
          <button class="expand-toggle" type="button" data-expand="events-more">
            <span class="de">Frühere Veranstaltungen anzeigen (<?php echo (int) ( $ewb_past_total - 3 ); ?>)</span>
            <span class="en">Show earlier events (<?php echo (int) ( $ewb_past_total - 3 ); ?>)</span>
            <span class="tr">Önceki etkinlikleri göster (<?php echo (int) ( $ewb_past_total - 3 ); ?>)</span>
          </button>
          <?php
        endif;
        ?>
      </div>
    <?php endif; ?>
  </div>
</section>

<!-- ======================= BAND 2 ======================= -->
<section class="band band-tall" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/IMG_20220525_095958-scaled.jpg')">
  <div class="band-inner container reveal">
    <blockquote>
      <p class="de">„Der Wald ist mehr als die Summe seiner Bäume.“</p>
      <p class="en">"The forest is more than the sum of its trees."</p>
      <p class="tr">"Orman, ağaçlarının toplamından daha fazlasıdır."</p>
      <cite><span class="de">— Initiative Emmauswald bleibt!</span><span class="en">— Initiative Emmauswald bleibt!</span><span class="tr">— Emmauswald bleibt! Girişimi</span></cite>
    </blockquote>
  </div>
</section>

<!-- ======================= PRESSE ======================= -->
<section class="section" id="presse">
  <div class="container">
    <div class="section-head reveal">
      <p class="eyebrow"><span class="de">Pressespiegel</span><span class="en">Press review</span><span class="tr">Basında biz</span></p>
      <h2><span class="de">Der Emmauswald in den Medien</span><span class="en">The Emmaus Forest in the media</span><span class="tr">Medyada Emmaus Ormanı</span></h2>
    </div>

    <?php
    $ewb_press = new WP_Query(
      array(
        'post_type'      => 'ewb_press',
        'posts_per_page' => -1,
        'orderby'        => 'date',
        'order'          => 'DESC',
      )
    );
    $ewb_press_year = null;
    $ewb_kses       = array(
      'span' => array( 'class' => true ),
      'em'   => array( 'class' => true ),
    );
    while ( $ewb_press->have_posts() ) :
      $ewb_press->the_post();
      $ewb_item_year = get_the_date( 'Y' );
      if ( $ewb_item_year !== $ewb_press_year ) :
        if ( null !== $ewb_press_year ) :
          ?>
      </ul>
    </div>
          <?php
        endif;
        $ewb_press_year = $ewb_item_year;
        ?>
    <div class="press-group reveal">
      <h3><?php echo esc_html( $ewb_item_year ); ?></h3>
      <ul class="press-list">
        <?php
      endif;
      $ewb_url        = get_post_meta( get_the_ID(), 'ewb_press_url', true );
      $ewb_outlet     = get_post_meta( get_the_ID(), 'ewb_press_outlet', true );
      $ewb_date_label = get_post_meta( get_the_ID(), 'ewb_press_date_label', true );
      $ewb_sub        = get_post_meta( get_the_ID(), 'ewb_press_sub', true );
      ?>
        <li><a<?php echo $ewb_sub ? ' class="press-sub"' : ''; ?> href="<?php echo esc_url( $ewb_url ); ?>" target="_blank" rel="noopener"><span class="outlet"><?php echo esc_html( $ewb_outlet ); ?></span><span class="date"><?php echo esc_html( $ewb_date_label ); ?></span><span class="title"><?php echo wp_kses( get_the_title(), $ewb_kses ); ?></span></a></li>
      <?php
    endwhile;
    if ( null !== $ewb_press_year ) :
      ?>
      </ul>
    </div>
      <?php
    endif;
    wp_reset_postdata();
    ?>
  </div>
</section>

<!-- ======================= SPENDEN ======================= -->
<section class="section section-dark" id="spenden">
  <div class="container">
    <div class="section-head reveal">
      <p class="eyebrow"><span class="de">Spenden</span><span class="en">Donate</span><span class="tr">Bağış</span></p>
      <h2><span class="de">Unterstützt den Emmauswald mit eurer Spende</span><span class="en">Support the Emmaus Forest with your donation</span><span class="tr">Bağışınızla Emmaus Ormanı'nı destekleyin</span></h2>
      <p>
        <span class="de">Aktionsmaterialien, Verpflegung, die Logistik hinter einer Aktion und auch diese Webseite: Das alles kostet Geld. Damit wir den Emmauswald auch weiterhin vor der Immobilienindustrie beschützen können, sind wir auf Eure Unterstützung angewiesen – jeder Betrag hilft! Emmauswald bleibt! e.&nbsp;V. ist seit 2026 ein gemeinnütziger Verein und darf Spenden entgegennehmen sowie Spendenbescheinigungen ausstellen.</span>
        <span class="en">Action materials, catering, the logistics behind an action and this website too: all of that costs money. So that we can continue to protect the Emmaus Forest from the real estate industry, we depend on your support – every amount helps! Emmauswald bleibt! e.&nbsp;V. has been a registered non-profit association since 2026 and may accept donations and issue donation receipts.</span>
        <span class="tr">Eylem materyalleri, ikramlar, bir eylemin arkasındaki lojistik ve bu web sitesi: Bunların hepsi para gerektiriyor. Emmaus Ormanı'nı emlak sektörüne karşı korumaya devam edebilmemiz için desteğinize ihtiyacımız var – her miktar yardımcı olur! Emmauswald bleibt! e.&nbsp;V., 2026'dan beri kamu yararına çalışan bir dernektir; bağış kabul edebilir ve bağış makbuzu düzenleyebilir.</span>
      </p>
    </div>
    <div class="donate-grid">
      <div class="donate-card reveal">
        <h3>🏦 <span class="de">Spendenkonto</span><span class="en">Donation account</span><span class="tr">Bağış hesabı</span></h3>
        <dl>
          <div><dt><span class="de">Inhaber</span><span class="en">Account holder</span><span class="tr">Hesap sahibi</span></dt><dd>Emmauswald bleibt! e.&nbsp;V.</dd></div>
          <div><dt>IBAN</dt><dd class="mono">DE19 8306 5408 0007 0046 56</dd></div>
          <div><dt>BIC</dt><dd class="mono">GENODEF1SLR</dd></div>
          <div><dt>Bank</dt><dd>Deutsche Skatbank</dd></div>
        </dl>
      </div>
      <div class="donate-card reveal">
        <h3>💳 PayPal</h3>
        <p class="de">Gerne könnt ihr auch auf unser PayPal-Konto spenden:</p>
        <p class="en">You are also welcome to donate to our PayPal account:</p>
        <p class="tr">Dilerseniz PayPal hesabımıza da bağış yapabilirsiniz:</p>
        <p class="mono big">EmmausWald@outlook.de</p>
        <h3 style="margin-top:1.5rem">🧾 <span class="de">Spendenbescheinigung</span><span class="en">Donation receipt</span><span class="tr">Bağış makbuzu</span></h3>
        <p class="de">Eine Spendenbescheinigung könnt ihr über diese Mail erhalten: <a href="mailto:EmmausWald@outlook.de">EmmausWald@outlook.de</a></p>
        <p class="en">You can request a donation receipt via this email address: <a href="mailto:EmmausWald@outlook.de">EmmausWald@outlook.de</a></p>
        <p class="tr">Bağış makbuzunu şu e-posta adresinden talep edebilirsiniz: <a href="mailto:EmmausWald@outlook.de">EmmausWald@outlook.de</a></p>
      </div>
    </div>
  </div>
</section>

<!-- ======================= MATERIAL ======================= -->
<section class="section section-alt" id="material">
  <div class="container">
    <div class="section-head reveal">
      <p class="eyebrow">Material</p>
      <h2><span class="de">Material zum Herunterladen und Verteilen</span><span class="en">Materials to download and distribute</span><span class="tr">İndirip dağıtabileceğiniz materyaller</span></h2>
      <p class="muted">
        <span class="de">Ladet euch unsere Materialien herunter, druckt sie aus und verteilt sie an eure Nachbar*innen!</span>
        <span class="en">Download our materials, print them out and hand them to your neighbours!</span>
        <span class="tr">Materyallerimizi indirin, yazdırın ve komşularınıza dağıtın!</span>
      </p>
    </div>
    <div class="material-grid">
      <a class="material-card reveal" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/downloads/231026_Flyer_DE.pdf" download>
        <span class="material-icon">📄</span>
        <strong><span class="de">Flyer (Deutsch, A6)</span><span class="en">Flyer (German, A6)</span><span class="tr">El ilanı (Almanca, A6)</span></strong>
        <span class="chip">PDF · DE</span>
      </a>
      <a class="material-card reveal" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/downloads/231107_Flyer_ENG_A6.pdf" download>
        <span class="material-icon">📄</span>
        <strong><span class="de">Flyer (Englisch, A6)</span><span class="en">Flyer (English, A6)</span><span class="tr">El ilanı (İngilizce, A6)</span></strong>
        <span class="chip">PDF · EN</span>
      </a>
      <a class="material-card reveal" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/downloads/231107_Flyer_TUR_A6.pdf" download>
        <span class="material-icon">📄</span>
        <strong><span class="de">Flyer (Türkisch, A6)</span><span class="en">Flyer (Turkish, A6)</span><span class="tr">El ilanı (Türkçe, A6)</span></strong>
        <span class="chip">PDF · TR</span>
      </a>
      <a class="material-card reveal" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/downloads/Emmauswald-bleibt-Plakat-Flyer-A4_compressed.pdf" download>
        <span class="material-icon">🖼️</span>
        <strong><span class="de">Plakat / Flyer (A4)</span><span class="en">Poster / flyer (A4)</span><span class="tr">Afiş / el ilanı (A4)</span></strong>
        <span class="chip">PDF · A4</span>
      </a>
      <a class="material-card reveal" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/downloads/Emmauswald-bleibt-Plakat-A3_compressed.pdf" download>
        <span class="material-icon">🖼️</span>
        <strong><span class="de">Plakat (A3)</span><span class="en">Poster (A3)</span><span class="tr">Afiş (A3)</span></strong>
        <span class="chip">PDF · A3</span>
      </a>
      <a class="material-card reveal" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/EmmausWald_logo_centered.png" download>
        <span class="material-icon">🌳</span>
        <strong>Logo</strong>
        <span class="chip">PNG</span>
      </a>
    </div>
  </div>
</section>

<!-- ======================= BILDER / GALLERY ======================= -->
<section class="section" id="bilder">
  <div class="container-wide">
    <div class="section-head container reveal">
      <p class="eyebrow"><span class="de">Bilder</span><span class="en">Gallery</span><span class="tr">Galeri</span></p>
      <h2><span class="de">Eindrücke aus dem Emmauswald</span><span class="en">Impressions of the Emmaus Forest</span><span class="tr">Emmaus Ormanı'ndan kareler</span></h2>
      <p class="muted">
        <span class="de">Klickt auf ein Bild, um es in voller Größe zu sehen.</span>
        <span class="en">Click an image to view it in full size.</span>
        <span class="tr">Tam boyutta görmek için bir görsele tıklayın.</span>
      </p>
    </div>
    <div class="gallery">
      <?php
      $ewb_gallery = new WP_Query(
        array(
          'post_type'      => 'attachment',
          'post_status'    => 'inherit',
          'post_mime_type' => 'image',
          'posts_per_page' => -1,
          'orderby'        => 'date',
          'order'          => 'ASC',
          'meta_query'     => array(
            'relation' => 'OR',
            array(
              'key'     => '_wp_attachment_context',
              'compare' => 'NOT EXISTS',
            ),
            array(
              'key'     => '_wp_attachment_context',
              'value'   => 'site-icon',
              'compare' => '!=',
            ),
          ),
        )
      );
      while ( $ewb_gallery->have_posts() ) :
        $ewb_gallery->the_post();
        $ewb_full  = wp_get_attachment_image_url( get_the_ID(), 'full' );
        $ewb_thumb = wp_get_attachment_image_url( get_the_ID(), 'large' );
        $ewb_alt   = get_post_meta( get_the_ID(), '_wp_attachment_image_alt', true );
        if ( ! $ewb_thumb ) {
          $ewb_thumb = $ewb_full;
        }
        ?>
        <a href="<?php echo esc_url( $ewb_full ); ?>"><img src="<?php echo esc_url( $ewb_thumb ); ?>" alt="<?php echo esc_attr( $ewb_alt ? $ewb_alt : get_the_title() ); ?>" loading="lazy"></a>
        <?php
      endwhile;
      wp_reset_postdata();

      if ( 0 === (int) $ewb_gallery->post_count ) :
        ?>
        <p class="muted" style="grid-column:1/-1">
          <span class="de">Noch keine Bilder in der Mediathek. Importiert <code>data/content.xml</code> oder ladet Fotos unter „Medien“ hoch.</span>
          <span class="en">No images in the Media Library yet. Import <code>data/content.xml</code> or upload photos under "Media".</span>
          <span class="tr">Medya kitaplığında henüz görsel yok. <code>data/content.xml</code> dosyasını içe aktarın veya "Medya" altında fotoğraf yükleyin.</span>
        </p>
        <?php
      endif;
      ?>
    </div>
  </div>
</section>

<!-- ======================= KONTAKT ======================= -->
<section class="section section-dark" id="kontakt">
  <div class="container">
    <div class="section-head reveal">
      <p class="eyebrow"><span class="de">Kontakt</span><span class="en">Contact</span><span class="tr">İletişim</span></p>
      <h2><span class="de">Sprecht mit uns!</span><span class="en">Get in touch!</span><span class="tr">Bize ulaşın!</span></h2>
      <p>
        <span class="de">Ihr erreicht uns per E-Mail – oder kommt direkt in unsere Telegramgruppe und macht mit.</span>
        <span class="en">You can reach us by email – or join our Telegram group directly and get involved.</span>
        <span class="tr">Bize e-posta ile ulaşabilirsiniz – ya da doğrudan Telegram grubumuza gelin ve katılın.</span>
      </p>
    </div>
    <div class="contact-grid reveal">
      <a class="contact-card" href="mailto:EmmausWald@outlook.de">
        <span class="contact-icon">✉️</span>
        <strong>E-Mail</strong>
        <span>EmmausWald@outlook.de</span>
      </a>
      <a class="contact-card" href="<?php echo esc_url( ewb_telegram_url() ); ?>" target="_blank" rel="noopener">
        <span class="contact-icon">📣</span>
        <strong>Telegram</strong>
        <span><span class="de">Unserer Gruppe beitreten</span><span class="en">Join our group</span><span class="tr">Grubumuza katıl</span></span>
      </a>
      <a class="contact-card" href="https://twitter.com/EmmausWald" target="_blank" rel="noopener">
        <span class="contact-icon">𝕏</span>
        <strong>Twitter / X</strong>
        <span>@EmmausWald</span>
      </a>
      <a class="contact-card" href="https://www.instagram.com/emmauswald_bleibt/" target="_blank" rel="noopener">
        <span class="contact-icon">📷</span>
        <strong>Instagram</strong>
        <span>@emmauswald_bleibt</span>
      </a>
      <a class="contact-card" href="https://bsky.app/profile/emmauswald.bsky.social" target="_blank" rel="noopener">
        <span class="contact-icon">🦋</span>
        <strong>Bluesky</strong>
        <span>emmauswald.bsky.social</span>
      </a>
      <a class="contact-card" href="<?php echo esc_url( ewb_petition_url() ); ?>" target="_blank" rel="noopener">
        <span class="contact-icon">✍️</span>
        <strong>Petition</strong>
        <span>change.org</span>
      </a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
