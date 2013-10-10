<?php

    /**
     * Need to keep this as array() vs. [] for Transilex
     */
    $messages = array(
        'language_text'                   => 'İngilizce',
        'download'                        => 'İndir',
        'documentation'                   => 'Dökümantasyon',
        'forum'                           => 'Forum',
        'blog'                            => 'Blog',
        'support'                         => 'Destek',
        'donate'                          => 'Bağış',
        'store'                           => 'Mağaza',
        'github'                          => 'GitHub',
        'phalcon_description'             => "<strong>Phalcon</strong> C dili ile hazırlanmış <a href=':1:'>yüksek performans</a> ve daha düşük kaynak tüketimi sunan bir çatıdır.",
        'the_fastest_php_framework'       => 'En hızlı<br />PHP Framework\'u',
        'try_online'                      => 'Çevrimiçi Dene',
        'see_screencasts'                 => 'Videolara Bakın',
        'everything_you_need_upper'       => 'İhtiyacınız Olan Herşey',
        'full_mvc_applications'           => "Tüm <a href=':1:'>MVC</a> Uygulamaları",
        'single_module'                   => 'Tek Modül',
        'multi_module'                    => 'Çoklu Modül',
        'micro_applications'              => 'Mikro Uygulamalar',
        'orm'                             => 'ORM',
        'transactions'                    => 'İşlemler',
        'behaviors'                       => 'Hareketler',
        'relations'                       => 'İlişkiler',
        'phql'                            => 'PHQL',
        'events'                          => 'Etkinlikler',
        'validations'                     => 'Doğrulamalar',
        'hydration'                       => 'Hidrasyon',
        'logging'                         => 'Günlkük',
        'profiling'                       => 'Profilleme',
        'sharding'                        => 'Sharding',
        'odm_for_mongo'                   => 'Mongo için ODM',
        'template_engine_volt'            => 'Şablon Motoru (Volt)',
        'di_ioc'                          => 'DI/IOC',
        'events_management'               => 'Etkinlik Yönetimi',
        'encryption'                      => 'Şifreleme',
        'http_request'                    => 'HTTP İsteği',
        'http_response'                   => 'Yanıt',
        'http_cookies'                    => 'Çerezler',
        'escaping'                        => 'Atlatma',
        'filtering'                       => 'Filtreleme',
        'forms_builder'                   => 'Form Oluşturucu',
        'forms_validation'                => 'Doğrulama',
        'flash_messages'                  => 'Flaş Mesajlar',
        'cache'                           => 'Önbellek',
        'pagination'                      => 'Sayfalandırma',
        'annotations'                     => 'Açıklamalar',
        'security'                        => 'Güvenlik',
        'translations'                    => 'Çeviriler',
        'assets_management'               => 'Ek Yönetimi',
        'universal_auto_loader'           => 'Evrensel Otomatik Yükleyici',
        'cli'                             => 'CLI',
        'phalcon_forum_upper'             => 'Phalcon Forumu',
        'stack_overflow_upper'            => 'Stack Overflow',
        'github_upper'                    => 'GitHub',
        'email_us_upper'                  => 'Bize Yazın',
        'services_upper'                  => 'Servisler',
        'consulting_upper'                => 'Danışmanlık',
        'requirements_analysis'           => 'Gereksinim Analizi',
        'implementation'                  => 'Implementasyon',
        'ongoing_support'                 => 'Devam Eden Destek',
        'read_more'                       => 'Devamını Oku',
        'hosting_upper'                   => 'SUNUCU',
        'phalcon_can_be_installed'        => 'Phalcon bu sistemler üzerine kurulabilir:',
        'main_upper'                      => 'BAĞLANTILAR',
        'consulting'                      => 'Danışmanlık',
        'hosting'                         => 'Hosting',
        'support_upper'                   => 'DESTEK',
        'forum_community'                 => 'Forum / Topluluk',
        'stack_overflow'                  => 'Stack Overflow',
        'issue_tracker'                   => 'Sorun İzleyici',
        'get_involved_upper'              => 'BİZE KATILIN',
        'team'                            => 'Takım',
        'about'                           => 'Hakkında',
        'roadmap'                         => 'Yol Haritası',
        'donate_to_phalcon'               => 'Phalcon\'a bağış yap:',
        'or'                              => 'veya',
        'twitter'                         => 'Twitter',
        'facebook'                        => 'Facebook',
        'google_plus'                     => 'Google Plus',
        'vimeo'                           => 'Vimeo',
        'amazing_contributors'            => 'Katkıda Bulunanlar',

        'download_phalcon'                => 'Phalcon\'u İndir',
        'download_linux'                  => 'Linux/Unix/Mac',
        'download_windows'                => 'Windows DLL Dosyaları',
        'download_developer_tools'        => 'Geliştirici Araçları',
        'download_ide_stubs'              => '',
        'download_note'                   => '',
        'download_compilation'            => 'Derleme',
        'download_compilation_1'          => '',
        'download_requirements'           => 'Gereksinimler',
        'download_requirements_1'         => 'Daha önce yüklenmiş bazı paketler gerekiyor:',
        'download_requirements_2'         => 'PHP 5.x Geliştirici Kaynakları',
        'download_requirements_3'         => 'GCC Derleyici',
        'download_compilation_11'         => '1. C kaynağından eklenti oluşturmak için bu adımları izleyin:',
        'download_compilation_12'         => '2. php.ini dosyasına uzantıyı ekleyin:',
        'download_compilation_13'         => '3. Son olarak, web sunucusunu yeniden başlatın',
        'download_debian'                 => 'Debian',
        'download_debian_1'               => "<a href=':1:'>FortRabbit</a> tarafından önerilen bir depoyu <a href=':2:'>burada</a> bulabilirsiniz.",
        'download_debian_2'               => 'Paket ismi php5-phalcon',
        'download_arch'                   => 'Arch Linux',
        'download_arch_1'                 => "ArchLinux için PKGBUILD dosyasını <a href=':1:'>burada</a> bulabilirsiniz.",
        'download_opensuse'               => 'OpenSUSE',
        'download_opensuse_1'             => "",
        'download_freebsd'                => 'FreeBSD',
        'download_freebsd_1'              => '',
        'download_dependencies'           => 'Bağımlılıklar',
        'download_dependencies_1'         => 'Phalcon diğer binary eklentilerle doğrudan ilişkili olmamasına rağmen, onlardan bazılarını fonksiyonellik sağlamak için kullanmıştır. Kullanılan eklentiler:',
        'download_dependencies_2'         => 'Yukarıda belirtilen eklentilerin, Phalcon kurulu bir sistemde tanımlı olması zorunlu değildir. Sadece ihtiyaç duyduklarınızı kurabilirsiniz. Örneğin, eğer MySQL veritabanı kullanıyorsanız, sadece PDO ve PDO/MySQL yükleyip, Oracle, SQlite, Postgresql ve Mongo\'yu ihmal edebilirsiniz.',
        'download_need_help'              => 'Yardıma mı ihtiyacınız var?',
        'download_need_help_1'            => "Çeşitli problemleriniz ve sorularınız için <a href=':1:'>destek sayfamıza</a> göz atın. Size yardımcı olmak için elimizden geleni yapacağız.",

        'download_windows_note'           => '',
        'download_windows_stable'         => 'Kararlı/Ana Sürümler',
        'download_windows_installation'   => 'Kurulum',
        'download_windows_installation_1' => "Windows tabanlı işletim sisteminizde phalcon kullanabilmek için DLL kütüphanesini indirin. Eklentiyi çalıştırmak için php.ini dosyanızı düzeneyin ve web sunucunuzu yeniden başlatın. <a href=':1:'>Detaylar</a>.",
        'download_windows_guides'         => 'İlgili Kılavuzlar',
        'download_windows_guides_xampp'   => 'XAMPP Üzerinde Kurulum',
        'download_windows_guides_wamp'    => 'WAMP Üzerinde Kurulum',
        'download_windows_alpha'          => 'Alfa/Beta Sürümleri',
        'download_source_code'            => "Kaynak Kodu: <a href=':1:' target='_download' title='GitHub Repo'>github</a>",
        'download_source_code_switch'     => "Kaynak Kodu (lütfen alakalı branşa geçiniz): <a href=':1:' target='_download' title='GitHub Repo'>github</a>",
        'download_no_alpha_beta'          => 'Şu an hiç uygun alfa/beta sürümü yok.',
        'download_windows_older'          => 'Eksi Sürümler',

        'download_devtools_1'             => 'Bu araçlar, iskelet kodun oluşturulması için kullanılan yararlı scriptlerin bir araya getirilmesi ile oluşturulmuştur. Uygulamanın çekirdek bileşenleri basit bir komutla yaratılabilir ve size Phalcon ile rahatlıkla uygulama geliştirme imkânı sunar.',
        'download_devtools_docs'          => "Dökümantasyon: <a href=':1:'>Phalcon Geliştirici Araçları</a>",
        'download_devtools_composer'      => 'Composer Aracılığı İle Yükleme',
        'download_devtools_composer_1'    => 'Composer\'ı ortak bir konuma ya da proje dizinine kurun:',
        'download_devtools_composer_2'    => 'composer.json dosyasını aşağıda belirtildiği şekilde oluşturun:',
        'download_devtools_composer_3'    => 'Composer yükleyicisini çalıştırın:',
        'download_devtools_composer_4'    => '',
        'download_devtools_download'      => '<a href=":1:">Github</a> üzerinden, geliştirici araçlarını da içeren çapraz platform paketini indirebilir ya da klonlayabilirsiniz.',

        'consulting_header'               => "Phalcon ve/veya PHP uygulamaları üzerine<br /> danışmanlık hizmetleri sunmaktayız.",
        'requirements_analysis_1'         => '',
        'requirements_analysis_2'         => '',
        'implementation_1'                => '',
        'ongoing_support_1'               => '',
        'ongoing_support_2'               => '',
        'sponsors'                        => 'Sponsorlar',
        'sponsors_1'                      => '',
        'sponsors_2'                      => '',
        'contact'                         => 'İletişim',
        'contact_1'                       => "",

        'phalcon_team'                    => 'Phalcon Ekibi',
        'team_andres_1'                   => '',
        'team_andres_2'                   => "",
        'team_andres_3'                   => '',
        'team_andres_4'                   => '',
        'team_nikos_1'                    => '',
        'team_nikos_2'                    => '',
        'team_nikos_3'                    => '',
        'team_nikos_4'                    => "",
        'team_nikolay_1'                  => '',
        'team_nikolay_2'                  => '',
        'team_nikolay_3'                  => '',
        'team_nikolay_4'                  => '',
        'team_nikolay_5'                  => "",

        'get_involved'                    => 'Bize Katılın',
        'about_description_1'             => "",
        'about_description_2'             => '',
        'about_translations_1'            => "Dil engelini aşarak, mümkün olduğu kadar çok geliştiriciye ulaşmaya çalışıyoruz. Site için tercüme edilmesi gereken kelime ve sözcüklerin tercüme edilmesi için <a href=':1:'>:2:</a> kullanıyoruz. Tercüme projesini <a href=':3:'>burada</a> bulabilir ve güncel İlerleme durumunu aşağıda görebilirsiniz.",
        'documentation_upper'             => 'Dökümantasyon',
        'about_documentation_1'           => '',
        'screencasts'                     => 'Videolar',
        'about_screencasts_1'             => "",
        'tests'                           => 'Testler',
        'about_tests_1'                   => "",
        'sample_applications'             => 'Örnek Uygulamalar',
        'about_sample_apps_1'             => '',
        'evangelism'                      => '',
        'about_evangelism_1'              => "",
        'share_your_experiences'          => 'Deneyimlerinizi paylaşın',
        'about_share_experiences_1'       => "",
        'about_blog_1'                    => "",
        'donations_sponsoring'            => 'Bağış / Sponsor',
        'about_sponsoring_1'              => "",
        'social_networks'                 => 'Sosyal Ağlar',
        'about_social_networks_1'         => "",
        'about_social_networks_2'         => "",
        'follow_on_twitter'               => 'Twitter\'da Takip Et',
        'facebook_page'                   => 'Facebook Sayfası',
        'google_plus_page'                => 'Google+ Sayfası',
        'official_blog'                   => 'Resmi Blog',
        'star_on_github'                  => 'GitHub\'da proje oluştur',
        'thank_you'                       => 'Teşekkürler!',
        'about_thank_you_1'               => '',
        'flying_with_phalcon'             => 'Phalcon ile uçuşa geçtiğiniz için teşekkürler! &lt;3',

        'hosting_description'             => '',
        'hosting_fortrabbit_1'            => '',
        'hosting_fortrabbit_2'            => "",
        'hosting_fortrabbit_3'            => '',
        'hosting_webfaction_1'            => '',
        'hosting_webfaction_2'            => "",
        'hosting_amazon_ec2_1'            => '',
        'hosting_amazon_ec2_2'            => "",
        'hosting_linode_1'                => "",
        'hosting_digital_ocean_1'         => "",
        'hosting_rackspace_1'             => "",
        'hosting_install_instructions'    => 'Phalconu standart yükleme talimatlarını kullanarak yükleyin.',

        'testimonials'                    => 'Görüşler',
        'testimonials_description'        => "",
        'testimonials_1'                  => "Merhabalar, Phalcon ekibi! Phalcon Framework kullanarak oluşturduğum bir projem var. Projemin adı Guitarama (<a href='http://guitarama.ru'>http://guitarama.ru</a>) - gitar tabları ve akorları kataloğu. Site tasarlanırken Rus ziyaretçileri hedeflendi ve Rus dili kullanıldı, ancak umarım bu birçok sayfayı anlamanıza engel olmaz. Site ocak 2013 tarihinde yeni bir platform üzerinde tekrar yayına geçti ve o günden beridir istikrarlı bir büyüme gösteriyor. Güncel günlük ziyaret: ~1500  tekil ziyaretçi, ~5000 sayfa görüntüleme. Site eski bir fiziksel sunucu - 1хP4-3Ghz, 4GB RAM- üzerinde çalışıyor.  Bu muhteşem framework ve yaptığınız herşey için tekrar teşekkür ederim :) Michael.",
        'testimonials_2'                  => "",
        'testimonials_3'                  => "",
        'testimonials_4'                  => "",
        'testimonials_5'                  => "",

        'support_note'                    => "Karşılaştığınız çoğu hatanın ortaya çıkmasının en genel sebebi son sürümün kullanılmamasıdır. Lütfen :1: adresini ziyaret edin ve en son uygun sürümü indirin (ya da derleyin) ve karşılaştığınız meselenin gerçekten bir hata olup olmadığından emin olun.",
        'support_download_page'           => "indirme sayfası",
        'support_documentation_1'         => "Lütfen herşeyden önce :1: bölümünü kullanın. Ayrıca dökümanlarımızda aradığınızı bulabilmek için arama özelliğini de kullanabilirsiniz. Eğer sorunuza hâla yanıt bulamadıysanız, aşağıda birkaç seçenek daha bulunmaktadır.",
        'support_phalcon_forum'           => "Phalcon Forumu",
        'support_forum_1'                 => "Sorularınızı <a href=':1:'>Tartışma Forumumuzda</a> sorabilirsiniz.",
        'support_irc'                     => "IRC Kanalı",
        'support_irc_1'                   => "Bizi Freenode üzerinde :1:. kanalda bulabilirsiniz.",
        'support_stack_overflow_1'        => "Eğer Stack Overflow'a yabancı değilseniz veya Stack Overflow'u kullanmayı tercih ediyorsanız, arama yapmak ya da sorgularınızı etiketlemek için <a href=':1:'>phalcon</a> etiketini kullanabilirsiniz.",
        'support_please_note'             => "Lütfen dikkat:",
        'support_please_note_1'           => "Stack Overflow, kendini Phalcon' u desteklemeye adamamıştır.",
        'support_please_note_2'           => "Lütfen bu bölümden hata bildiriminde bulunmayın. Bunun için GitHub üzerindeki <a href=':1:'>olay takip sistemini</a> kullanabilirsiniz.",
        'support_please_note_3'           => "Lütfen bu bölümden yeni özellik talebinde bulunmayın. Bunun için GitHub üzerindeki <a href=':1:'>olay takip sistemini</a> kullanabilirsiniz.",
        'support_please_note_4'           => "Sorunuza 'phalcon' etiketini eklediğinizden emin olun.",
        'support_please_note_5'           => "Soru içerisinde 'Phalcon' dan bahsettiğinizden emin olun.",
        'support_reporting_a_bug'         => "Hata Bildir",
        'support_reporting_a_bug_1'       => "",


    );

    // return $messages;