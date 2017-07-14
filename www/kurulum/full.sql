ALTER TABLE `hastaliklar`
 ADD FULLTEXT KEY `adi` (`adi`,`belirtileri`,`bilgi`,`gorulmeyeri`,`resim`,`kategori`,`gosterilme`,`yas`,`zaman`,`durum`), ADD FULLTEXT KEY `adi_2` (`adi`);