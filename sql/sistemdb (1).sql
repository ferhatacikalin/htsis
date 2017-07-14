-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 12 Nis 2015, 09:51:07
-- Sunucu sürümü: 5.6.21
-- PHP Sürümü: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `sistemdb`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `aralik`
--

CREATE TABLE IF NOT EXISTS `aralik` (
  `adi` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `aralik`
--

INSERT INTO `aralik` (`adi`) VALUES
('az'),
('çok sık'),
('aralıklarla'),
('aşırı');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `belirtiler`
--

CREATE TABLE IF NOT EXISTS `belirtiler` (
  `adi` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Tablo döküm verisi `belirtiler`
--

INSERT INTO `belirtiler` (`adi`) VALUES
('yutma güçlüğü'),
('boğazda kızarıklık'),
('boğazda şişlik'),
('anüste kanama'),
('kabızlıktır'),
(' uyuma isteği'),
(' eklem ağrıları '),
('gerginlik'),
('isteksizlik'),
(' halsizlik'),
('Boyun tutulması'),
('Bel tutulması'),
('Zor hareket etme'),
('kulak ağrısı'),
('deride şişlik'),
('deride yaralar'),
('cilt lekeleri'),
('deride değişiklik'),
('dilde yaralar'),
('dilde kabarcıklar'),
('hazımsızlık'),
('yüksek ateş'),
(' öksürük'),
('baş ağrısı'),
('boğaz ağrısı'),
('üşüme'),
('bitkinlik '),
('kusma'),
('ishal'),
('ateş'),
('kanlı ishal'),
('iştahsızlık'),
('karın ağrısı'),
('bulantı');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `durum`
--

CREATE TABLE IF NOT EXISTS `durum` (
  `adi` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Tablo döküm verisi `durum`
--

INSERT INTO `durum` (`adi`) VALUES
('Terleme'),
('Soğuk algınlığı'),
('Diş çürüğü'),
('Üşütme'),
('Bahar aylarında görülme'),
('Hamilelik'),
('güneşte çok kalma'),
('sigara kullanma'),
('kümes hayvanlarıyla temas'),
('kirli su tüketimi');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hastaliklar`
--

CREATE TABLE IF NOT EXISTS `hastaliklar` (
  `adi` text COLLATE utf8_bin NOT NULL,
  `belirtileri` text COLLATE utf8_bin NOT NULL,
  `bilgi` text COLLATE utf8_bin NOT NULL,
  `gorulmeyeri` text COLLATE utf8_bin NOT NULL,
  `resim` text COLLATE utf8_bin NOT NULL,
  `kategori` text COLLATE utf8_bin NOT NULL,
  `gosterilme` text COLLATE utf8_bin NOT NULL,
  `yas` text COLLATE utf8_bin NOT NULL,
  `zaman` text COLLATE utf8_bin NOT NULL,
  `durum` text COLLATE utf8_bin NOT NULL,
  `aralik` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Tablo döküm verisi `hastaliklar`
--

INSERT INTO `hastaliklar` (`adi`, `belirtileri`, `bilgi`, `gorulmeyeri`, `resim`, `kategori`, `gosterilme`, `yas`, `zaman`, `durum`, `aralik`) VALUES
('Adale Romatizmas?', 'Boyun tutulması,Bel tutulması,Zor hareket etme,', '', 'Tüm vücut,Kafa bölgesi,Boyun bölgesi,Sırt bel bölgesi,', '../resim/resimyok.png', 'Eklem Hastalıkları,', '0', 'Çocuk,Bebek,Genç,Orta yaş,Yaşlı,', 'Belirli bir zamanı yok,', 'Terleme,Soğuk algınlığı,Diş çürüğü,Üşütme,', 'aralıklarla,'),
('Bahar Yorgunluğu', ' uyuma isteği, eklem ağrıları ,gerginlik,isteksizlik, halsizlik,', 'Bahar Yorgunluğu Nedir? Bahar aylarında, vücut metabolizmasındaki değişikliklerle birlikte oluşan halsizlik, isteksizlik ve yorgunluk hissine "Bahar Yorgunluğu" denir.\r\n\r\nBahar Yorgunluğunun Nedenleri: Bahar mevsiminin gelmesiyle birlikte birçok insanda yorgunluk, halsizlik ve gerginlik görülebilir. Bunun en önemli nedeni, havaların ısınmasıyla birlikte daha fazla suyun buharlaşması ve bunun sonucunda da havadaki nem oranının ve elektrik yükünün artmasıdır.\r\n\r\nBahar Yorgunluğu Belirtileri: Bahar Aylarında görülen nedensiz halsizlik, isteksizlik ve gerginlik en önemli belirtilerdir. Ayrıca, eklem ağrıları ve uyuma isteği görülebilir. Eğer önlem alınmazsa bahar yorgunluğu kalıcı hale gelebilir.\r\n\r\nBahar Yorgunluğuna yakalanmamak ya da bahar yorgunluğunu daha hafif atlatmak için, özellikle uyku düzenini bozmamaya ve değiştirmemeye dikkat edilmelidir. Ayrıca, beslenmeye dikkat edilmeli; bol vitaminli, besleyici gıdalar tüketilmeli, bol bol da su içilmelidir. Özellikle sabahları, aşırı yorulmamak şartıyla spor yapmak da gün boyunca daha dinç ve enerjik olmak için faydalıdır. Stresten ve olumsuz düşüncelerden uzak durmaya çalışmak da faydalıdır.Alkol, kola ve kafein içeren içeceklerden de kesinlikle uzak durulmalıdır.', 'Tüm vücut,', '../resim/resimyok.png', 'Ruh Hastalıkları,', '0', 'Çocuk,Genç,Orta yaş,Yaşlı,', 'Belirli bir zamanı yok,', 'Bahar aylarında görülme,', 'aşırı,'),
('Hemoroid', 'anüste kanama,kabızlıktır,', 'Basur, anüs (makat) bölgesindeki damarların varis gibi genişlemesidir. \r\n', 'Kalça Bölgesi,', 'resim.png', 'Sindirim Sistemi Hastalıkları,', '0', 'Çocuk,Bebek,Genç,Orta yaş,Yaşlı,', 'Belirli bir zamanı yok,', 'Soğuk algınlığı,Üşütme,Hamilelik,', 'az,'),
('Boğaz İltihabı ', 'yutma güçlüğü,boğazda kızarıklık,boğazda şişlik,kulak ağrısı,', 'Boğaz İltihabı boğazda şişlik ve kızarıklık ile yutma güçlüğü gibi belirtiler gösteren bir hastalıktır. İltihap bademciklere de sıçramış olabilir. Sadece bademciklerde iltihap var ise "Tonsillit" yani Bademcik İltihabı söz konusudur.', 'Kafa bölgesi,Yüz bölgesi,', '../resim/resimyok.png', 'Kulak Burun Boğaz Hastalıkları,', '0', 'Çocuk,Bebek,Genç,Orta yaş,Yaşlı,', 'Belirli bir zamanı yok,', 'Terleme,Soğuk algınlığı,Üşütme,', 'az,'),
('Deri Kanseri', 'deride yaralar,cilt lekeleri,deride değişiklik,', 'Bütün dünyada, Kanser türleri içerisinde en sık karşılaşılan tür olan "Deri Kanseri" her yıl milyonlarca insanda görülmektedir. Bununla birlikte, kanserden kaynaklanan ölümlerde Deri Kanserinin payı %2 civarındadır.\r\n\r\nDeri Kanseri Belirtileri deri üzerindeki şişlik veya uzun süredir iyileşmeyen yaralar şeklinde başlayabilir. Vücudunuzdaki lekelerin, çil ve benlerin şekil, renk ve boyutlarındaki değişiklikler de yakından izlenmelidir. Bu değişiklikleri fark edebilmek için vücudunuzu iyi tanımalı ve düzenli olarak tepeden tırnağa kontrol etmelisiniz. Cilt Kanserinin Belirtileri görüldüğü takdirde ihmal edilmemelidir, çünkü Deri Kanseri Erken Tedavi edildiği takdirde iyileşme oranı yüksektir.\r\n\r\nDeri Kanserinin Nedenleri arasında ilk sırayı ultraviyole güneş ışığına fazlaca maruz kalmak alır. Bunun yanında X ışınına sürekli maruz kalmak, kömür ve arsenik gibi maddelerle uzun süreli temas ve genetik yatkınlık Deri Kanserine yakalanma riskini arttırır.\r\n\r\nDeri Kanserine yakalanma riski açık renkli ve kolay kızaran bir tene sahip olan, gözleri ve saçları açık renkli, açık havada doğrudan güneş ışığına fazlaca maruz kalan, ailesinde Deri Kanseri vakası görülmüş olan, Ekvatora yakın ya da yüksek kesimlerde yaşayan ve derisinde fazla miktarda çil ve ben bulunan kişilerde daha fazladır.', 'Tüm vücut,Kafa bölgesi,Yüz bölgesi,Boyun bölgesi,Ense bölgesi,Omuz bölgesi ,Koltuk bölgesi,Göğüs bölgesi,Karın bölgesi,Sırt bel bölgesi,Üst uzuvlar,Alt uzuvlar,Kalça Bölgesi,', '../resim/resimyok.png', 'Deri Hastalıkları,', '0', 'Çocuk,Bebek,Genç,Orta yaş,Yaşlı,', 'Belirli bir zamanı yok,öğle ,', 'güneşte çok kalma,', 'çok sık,aşırı,'),
('Dil ülseri ', 'dilde yaralar,dilde kabarcıklar,hazımsızlık,', 'Dil ülseri nedir? Sindirim Sisteminin herhangi bir noktasında oluşan yaralara Ülser denir. Bunlardan birisi de Dil Ülseridir.\r\n\r\nDil Ülserinin Belirtileri arasında ilk sırayı dilde görülen derin ve sert yaralar alır. İçi su dolu, kırmızı kabarcıklar şeklinde de olabilir. Kesin teşhis için doktora danışılmalıdır.\r\n\r\nDilde yara oluşmasının başlıca nedenleri kirli sular,alkol ve sigara kullanımı, yetersiz beslenme ve stres olarak sayılabilir. Hazımsızlık ve grip de dilde yara oluşmasına neden olabilmektedir.\r\n\r\nDil Ülseri Tedavisi için öncelikle belirtiler bir doktor tarafından incelenerek kesin teşhis konulmalıdır. Doktor teşhisten sonra uygun tedavi için hastayı yönlendirecektir.', 'Ağız Bölgesi,', '../resim/resimyok.png', 'Sindirim Sistemi Hastalıkları,', '0', 'Çocuk,Bebek,Genç,Orta yaş,Yaşlı,', 'Belirli bir zamanı yok,', 'Diş çürüğü,sigara kullanma,', 'çok sık,aralıklarla,'),
('Domuz gribi', 'yüksek ateş, öksürük,baş ağrısı,boğaz ağrısı,üşüme,bitkinlik ,kusma,ishal,ateş,', 'Domuz Gribi Nedir? Domuz gribi, domuzlarda görülen A (H1N1) tipi grip virüsünden kaynaklanan ve insanlara da bulaşabilen ve bulaşıcılığı diğer griplere nazaran daha hızlı olan bir hastalıktır.\r\n\r\nDomuz Gribi Belirtileri: Domuz gribinin belirtileri, insanlarda görülen grip belirtilerine benzerdir. Bunlar: Yüksek ateş, öksürük, baş ağrısı, boğaz ağrısı, bütün vücuda yayılan eklem ağrıları, üşüme ve bitkinlik gibi belirtileri içermektedir. Bazı vakalarda kusma ve ishal de görülebilmektedir. Domuz gribine yakanalanlarda görülen ateş, normal grip ateşinden daha fazla olmaktadır. Bu nedenle, özellikle sınır kapılarına termal kameralar yerleştirilerek domuz gribi olan kişilerin ülkeye girişi esnasında tesbit edilerek karantina, tanı ve tedavi işlemleri yapılabilmektedir.\r\n\r\nBu belirtiler sadece domuz gribine özgü olmadığı için tanı konulması için hastanın yakın geçmişi, domuz gribi olan kişilerle temas edebileceği bölgelerde bulunup bulunmadığı ya da domuzların ve kümes hayvanlarının bulunduğu ortamlarda bulunup bulunmadığı sorgulanarak ayırıcı tanı yönteminin uygulanması gerekmektedir.\r\n\r\nDomuz Gribi Nasıl Bulaşır: Domuz gribi virüsü, solunum yoluyla bulaşmaktadır. Domuz gribi domuzdan insana ve insandan insana bulaşabilmektedir. İnsandan insana, hapşırık, öksürük ve hatta ele bulaşması halinde tokalaşma yoluyla bulaşabilen domuz gribi, bilgisayar klavyesi gibi virüslü bir yerle temas ettikten sonra burna ve ağıza dokunulması ile de yayılabilmektedir.\r\n\r\nÖğrenciler, sağlık çalışanları, veterinerler, domuzlarla doğrudan temas içinde olanlar, hastalığın görüldüğü ülkelere seyahat edenler, vücut direnci düşük olan kalp, tansiyon ve şeker hastaları daha fazla risk altındadır.\r\n\r\nDomuz Gribi Tedavisi: Domuz gribi teşhisi konuldu ise öncelikle gribin daha fazla yayılmasının engellenmesi için önlem alınmalıdır. Domuz gribine yakalananların büyük bir çoğunluğu kendiliğinden iyileşmekte ve hatta domuz gribine yakalandığını dahi bilmeden hastalığı atlatabilmektedir. Bununla birlikte, vücut direnci zayıf olanlar ile kronik rahatsızlıkları olanlar, sigara ve alkol kullananlar için hastalık ciddi bir tehdit oluşturabilir.\r\n\r\nBu dönemde hasta olan kişi gribin bulaşmasını önlemek için eşyalarını başkalarıyla paylaşmamalı ve yakın temastan kaçınmalıdır. Özellikle yüksek risk grubunda olanlar daha dikkatli ve tedbirli olmalı ve grip şikayetleri gösteriyorsa en kısa zamanda bir sağlık kuruluşuna baş vurulmalıdır.\r\n\r\nDomuz gribinden korunma ve önleyici tedbirler: Domuz gribine yakalanmayı önlemek için domuz gribi aşısı geliştirilmiştir. Bu aşının, henüz tartışmalı olmakla birlikte, %85 oranlarında koruyucu olabildiği söylenmektedir. Kimileri aşının, özellikle risk grubundakiler için, mutlaka yapılması gerektiğini savunurken, bazıları da aşının yan etkileri konusunda tereddütlerini dile getirmektedir.\r\n\r\nDomuz gribi bulaşıcı bir hastalık olduğu için öncelikle hasta olan kişilerin virüsü yayması önlenmelidir. Bunun için;\r\n\r\nÖksürürken ve hapşırırken ağız ve burun kapatılmalı, kullanılan mendiller hemen çöpe atılmalıdır. Eller ağız ve buruna götürülmemelidir, çünkü virüs bu yolla yayılabilir. Eller sürekli sabunlu suyla yıkanmalıdır. Su ve sabun dezenfekte için yeterlidir. Bununla birlikte, su ve sabun bulunamayan yerlerde dezenfekte için üretilen, fakat kaynağı ve içeriği belli olan ürünler kullanılabilir. Hastalanınca vakit geçirmeden doktora başvurulmalı; okula ve işe gidilmemelidir.\r\n\r\nBitkisel tedavi olarak, gribe zencefil iyi gelmektedir. Ayrıca, İbrahim Saraçoğlu Hocamızın tavsiye ettiği kuru soğan grip şikayeti için belki de rakipsizdir.\r\n\r\nİnce kabuğunu soyduktan sonra 8-10 parçaya ayırdığınız bir soğanı 2 bardak suda 5 dakika kadar kaynattıktan sonra suyunu süzüp içerseniz, gribe karşı çok etkili olduğunu göreceksiniz.', 'Tüm vücut,', '../resim/resimyok.png', 'Bulaşıcı Hastalıklar,', '0', 'Çocuk,Bebek,Genç,Orta yaş,Yaşlı,', 'Belirli bir zamanı yok,', 'kümes hayvanlarıyla temas,', 'aşırı,'),
('Dizanteri', 'kusma,ishal,ateş,kanlı ishal,iştahsızlık,karın ağrısı,bulantı,', 'Dizanteri nedir? Dizanteri, ishalle birlikte görülen bulaşıcı ve salgın bir kalın bağırsak hastalığıdır. Yaşlılarda, küçük çocuklarda ve Bebeklerde dizanteri çok daha tehlikelidir ve ölümlerle dahi sonuçlanabilir.\r\n\r\nDizanteri Belirtileri: Başlıca belirti sık ve kanlı ishaldir. İştahsızlık, şiddetli karın ağrısı ve ateş de görülebilir. Kimi durumlarda ishale bulantı ve kusma da eşlik edebilir.\r\n\r\nDizanterinin nedenleri: Dizanterinin başlıca nedenleri kirli su ve iyi yıkanmamış yiyeceklerdir. Bu nedenle su, el ve gıda temizliğine özen göstermek gerekir.\r\n\r\nDizanteri Nasıl Bulaşır? Kirli su ve besinler yoluyla bulaşır. Okul gibi kalabalık ortamlar hastalığın bulaşması için uygun ortamlardır. İki çeşit dizanteri vardır:\r\n\r\n   Amipli Dizanteri: Vücuda mikrop girmesinden 10-21 gün sonra hastalık belirtileri ortaya çıkar. Hastada kanlı ishal, ateş, karın krampları, kilo kaybı ve halsizlik görülür.\r\n\r\n   Basilli Dizanteri: Mikrobun vücuda girmesinden 2-7 gün sonra belirtileri ortaya çıkar. Hastalığın salgın halini almasında kara sinekler başrolü oynar. Hastada; kanlı ve balgam kıvamında ishal, karın ağrısı, halsizlik ve ateş görülür. Yapılacak ilk iş; hastayı diğer insanlardan ayırarak hastalığın yayılmasını engellemektir.\r\n\r\nDizanteri Tedavisi: Tedavi için öncelikle hastalığa neden olan etkenler ortadan kaldırılmalıdır. Antibiyotik tedavisi uygulanabilir. Bazı durumlarda da antibiyotik şikayetleri arttırabilir. Bu durumda doktor uygun tedavi yöntemi ile tedaviye devam eder. Özellikle yaşlılarda, küçük çocuklarda ve bebeklerde sıvı ve mineral kaybının telafi edilmesi hayati önem taşır.\r\n\r\n   Hertürlü soru, sorun ve tedavi için doktora danışmayı ihmal etmeyin.', 'Karın bölgesi,Kalça Bölgesi,', '../resim/resimyok.png', 'Bulaşıcı Hastalıklar,Sindirim Sistemi Hastalıkları,', '0', 'Çocuk,Bebek,Genç,Orta yaş,Yaşlı,', 'Belirli bir zamanı yok,sabah,öğle ,akşam,gece,', 'kirli su tüketimi,', 'çok sık,aralıklarla,');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `kategori` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `kategori`
--

INSERT INTO `kategori` (`kategori`) VALUES
('Bulaşıcı Hastalıklar'),
('Deri Hastalıkları'),
('Göğüs Hastalıkları'),
('Kadın Hastalıkları'),
('Kalp ve Damar Hastalıkları'),
('Ruh Hastalıkları'),
('Sindirim Sistemi Hastalıkları'),
('Eklem Hastalıkları'),
('Kulak Burun Boğaz Hastalıkları');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sure`
--

CREATE TABLE IF NOT EXISTS `sure` (
  `adi` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Tablo döküm verisi `sure`
--

INSERT INTO `sure` (`adi`) VALUES
('Belirli bir zamanı yok'),
('sabah'),
('öğle '),
('akşam'),
('gece');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE IF NOT EXISTS `uyeler` (
`id` int(11) NOT NULL,
  `kullanici_adi` varchar(60) CHARACTER SET latin5 NOT NULL,
  `parola` varchar(60) CHARACTER SET latin5 NOT NULL,
  `eposta` varchar(60) CHARACTER SET latin5 NOT NULL,
  `tarih` date DEFAULT NULL,
  `yetki` varchar(60) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`id`, `kullanici_adi`, `parola`, `eposta`, `tarih`, `yetki`) VALUES
(3, 'admin', 'c3284d0f94606de1fd2af172aba15bf3', 'info@celalyurtcu.com', '2009-11-04', '1'),
(4, 'celal', '5f39e1238c3d4adb95e91cb5b0971f2c', 'admin@celalyurtcu.com', '2009-11-05', '0'),
(6, 'deneme', '994fd428a06b4523a6ff23d50ab17b07', 'deneme@123.com', '2009-11-05', '0'),
(7, 'ferdi', '29cafa031d1d9897627309b9ac7a91da', 'ferdi@ferdi.com', '2015-01-30', '0'),
(8, 'ferhat', '05edb71c94ada12127bfa179f72a4045', 'ferhat.acikalin91@gmail.com', '2015-03-20', '0'),
(9, '123', 'd9b1d7db4cd6e70935368a1efb10e377', '123@123.com', '2015-03-29', '0'),
(10, 'asd', '3dad9cbf9baaa0360c0f2ba372d25716', 'asd@asd.com', '2015-04-09', '0'),
(11, 'FERHAT AÇIKALIN', '65d145bc919c8044738954832a834d8d', 'ferhat@gfrt.com', '2015-04-09', '0'),
(12, 'ferhat.', '65d145bc919c8044738954832a834d8d', 'ferhat.acikalin917@gmail.com', '2015-04-09', '0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `vucutbolgeleri`
--

CREATE TABLE IF NOT EXISTS `vucutbolgeleri` (
  `bolge` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Tablo döküm verisi `vucutbolgeleri`
--

INSERT INTO `vucutbolgeleri` (`bolge`) VALUES
('Tüm vücut'),
('Kafa bölgesi'),
('Yüz bölgesi'),
('Boyun bölgesi'),
('Ense bölgesi'),
('Omuz bölgesi '),
('Koltuk bölgesi'),
('Göğüs bölgesi'),
('Karın bölgesi'),
('Sırt bel bölgesi'),
('Üst uzuvlar'),
('Alt uzuvlar'),
('Kalça Bölgesi'),
('Ağız Bölgesi');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yas`
--

CREATE TABLE IF NOT EXISTS `yas` (
  `yas` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Tablo döküm verisi `yas`
--

INSERT INTO `yas` (`yas`) VALUES
('Çocuk'),
('Bebek'),
('Genç'),
('Orta yaş'),
('Yaşlı');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `hastaliklar`
--
ALTER TABLE `hastaliklar`
 ADD FULLTEXT KEY `aralik` (`aralik`), ADD FULLTEXT KEY `adi` (`adi`,`belirtileri`,`gorulmeyeri`,`resim`,`kategori`,`gosterilme`,`yas`,`zaman`,`durum`,`aralik`), ADD FULLTEXT KEY `adi_2` (`adi`,`belirtileri`,`bilgi`,`gorulmeyeri`,`resim`,`kategori`,`gosterilme`,`yas`,`zaman`,`durum`,`aralik`);

--
-- Tablo için indeksler `uyeler`
--
ALTER TABLE `uyeler`
 ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
