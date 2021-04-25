<?php

/**
 * ⚠️ Editing not allowed except for 'en' language.
 *
 * @see https://github.com/monicahq/monica/blob/master/docs/contribute/translate.md for translations.
 */

return [

    //index
    'people_not_found' => 'Kişi bulunamadı',
    'people_list_number_kids' => ':count çocuklar',
    'people_list_last_updated' => 'Son görüşme:',
    'people_list_number_reminders' => ':count hatırlatıcı',
    'people_list_blank_title' => 'Hesabınızda kayıtlı kişi yok',
    'people_list_blank_cta' => 'Birisini ekle',
    'people_list_sort' => 'Sırala',
    'people_list_stats' => ':count bağlantı',
    'people_list_firstnameAZ' => 'İsimleri A → Z göre sırala',
    'people_list_firstnameZA' => 'İsimleri Z → A göre sırala',
    'people_list_lastnameAZ' => 'Soy isimleri A → Z göre sırala',
    'people_list_lastnameZA' => 'Soy isimleri Z → A göre sırala',
    'people_list_lastactivitydateNewtoOld' => 'Son aktivite tarihi eskiden yeniye göre sırala',
    'people_list_lastactivitydateOldtoNew' => 'Son aktivite tarihi yeniden eskiye göre sırala',
    'people_list_filter_tag' => 'Etiketlenen tüm bağlantılar listele',
    'people_list_clear_filter' => 'Filtreyi temizle',
    'people_list_contacts_per_tags' => ':count bağlantı',
    'people_list_show_dead' => 'Ölmüş kişileri göster (:count)',
    'people_list_hide_dead' => 'Ölmüş kişileri gizle (:count)',
    'people_search' => 'Bağlantılarda ara...',
    'people_search_no_results' => 'Sonuç bulunamadı',
    'people_search_next' => 'Sonraki',
    'people_search_prev' => 'Önceki',
    'people_search_rows_per_page' => 'Rows per page',
    'people_search_of' => '/',
    'people_search_page' => 'Sayfa',
    'people_search_all' => 'Hepsi',
    'people_add_new' => 'Yeni kişi ekle',
    'people_list_account_usage' => 'Hesap kullanım bilgileriniz: :current/:limit bağlantı',
    'people_list_account_upgrade_title' => 'Tüm özellikleri kullanmak için hesabınızı yükseltin.',
    'people_list_account_upgrade_cta' => 'Şimdi güncelle',
    'people_list_untagged' => 'Etiketlenmemiş bağlantıları göster',
    'people_list_filter_untag' => 'Etiketlenmemiş bağlantılar listeleniyor',

    // people add
    'people_add_title' => 'Yeni kişi ekle',
    'people_add_missing' => 'Kişi Bulunamadı Yeni Bir Tane Ekle',
    'people_add_firstname' => 'Ad',
    'people_add_middlename' => 'İkinci Ad (Opsiyonel)',
    'people_add_lastname' => 'Soyadı (isteğe bağlı)',
    'people_add_nickname' => 'Rumuz (isteğe bağlı)',
    'people_add_cta' => 'Ekle',
    'people_save_and_add_another_cta' => 'Kaydet ve başka birini ekle',
    'people_add_success' => ':name başarıyla kayıt edildi',
    'people_add_gender' => 'Cinsiyet',
    'people_delete_success' => 'Bağlantı silindi',
    'people_delete_message' => 'Bağlantıyı Sil',
    'people_delete_confirmation' => 'Bu kişiyi silmek istediğinizden emin misiniz? Silinen kayıtlar geri alınamaz.',
    'people_add_birthday_reminder' => 'Mutlu yıllar diliyorum: isim',
    'people_add_birthday_reminder_deceased' => 'Bu tarihte, :name doğum gününü kutlardı',
    'people_add_import' => '<a href=":url">Bağlantılarınızı aktarmak</a> istiyor musunuz?',
    'people_edit_email_error' => 'Bu e-mail adresine sahip bir kişi listenize kayıtlı. Lütfen farklı bir adres giriniz.',
    'people_export' => 'Vcard Formatında Çıkar',
    'people_add_reminder_for_birthday' => 'Doğum günü için yıllık bir hatırlatıcı oluşturun',

    // show
    'section_contact_information' => 'İletişim bilgileri',
    'section_personal_activities' => 'Aktiviteler',
    'section_personal_reminders' => 'Hatırlatıcılar',
    'section_personal_tasks' => 'Görevler',
    'section_personal_gifts' => 'Hediyeler',
    'section_personal_notes' => 'Notlar',

    // archived contacts
    'list_link_to_active_contacts' => 'Arşivlenmiş kişileri görüntülüyorsunuz. Bunun yerine <a href=":url">aktif kişilerin listesine</a> bakın.',
    'list_link_to_archived_contacts' => 'Arşivlenmiş kişilerin listesi',

    // Header
    'me' => 'Bu sensin',
    'edit_contact_information' => 'İletişim bilgilerini düzenle',
    'contact_archive' => 'Kişiyi arşivle',
    'contact_unarchive' => 'Kişiyi arşivden kaldır',
    'contact_archive_help' => 'Arşivlenmiş kişiler kişi listesinde gösterilmez, ancak arama sonuçlarında görünmeye devam eder.',
    'call_button' => 'Çağrıyı logla',
    'set_favorite' => 'Favori kişiler, kişi listesinin en üstüne yerleştirilir',

    // Stay in touch
    'stay_in_touch' => 'İrtibatta kal',
    'stay_in_touch_frequency' => 'Her {count} gün iletişimde kalın',
    'stay_in_touch_invalid' => 'Sıklık değeri, 0\'dan daha büyük bir sayı olmalıdır.',
    'stay_in_touch_premium' => 'Bu özelliği kullanabilmek için hesabınızı yükseltmeniz gerekir',
    'stay_in_touch_modal_title' => 'İrtibatta kal',
    'stay_in_touch_modal_desc' => 'Size {firstname} ile bağlantıda kalmanızı düzenli aralıklarla e-posta ile hatırlatabiliriz.',
    'stay_in_touch_modal_label' => 'Her... {count} günde bir bana e-posta gönder',

    // Calls
    'modal_call_title' => 'Çağrıyı logla',
    'modal_call_comment' => 'Ne hakkında konuştunuz? (isteğe bağlı)',
    'modal_call_exact_date' => 'Telefon görüşmesi gerçekleşti',
    'modal_call_who_called' => 'Kim aradı?',
    'modal_call_emotion' => 'Bu görüşme sırasında nasıl hissettiğinizi kaydetmek ister misiniz? (isteğe bağlı)',
    'calls_add_success' => 'Telefon görüşmesi kaydedildi.',
    'call_delete_confirmation' => 'Bu aramayı silmek istediğinize emin misiniz?',
    'call_delete_success' => 'Arama başarılı bir şekilde silindi',
    'call_title' => 'Telefon görüşmeleri',
    'call_empty_comment' => 'Ayrıntı yok',
    'call_blank_title' => '{name} ile yaptığınız telefon görüşmelerinin kaydını tutun',
    'call_blank_desc' => '{name} kişisini aradınız',
    'call_you_called' => 'Siz aradınız',
    'call_he_called' => '{name} aradı',
    'call_emotions' => 'Duygular:',

    // Conversation
    'conversation_blank' => ':name ile sosyal medya, SMS... üzerinden yaptığınız konuşmaları kaydedin',
    'conversation_delete_link' => 'Sohbeti sil',
    'conversation_edit_title' => 'Sohbeti düzenle',
    'conversation_edit_delete' => 'Bu sohbeti silmek istediğinizden emin misiniz? Silme işlemi geri alınamaz.',
    'conversation_add_success' => 'Sohbet başarıyla eklendi.',
    'conversation_edit_success' => 'Sohbet başarıyla güncellendi.',
    'conversation_delete_success' => 'Sohbet başarıyla silindi.',
    'conversation_add_title' => 'Yeni bir sohbet kaydet',
    'conversation_add_when' => 'Bu konuşmayı ne zaman yaptınız?',
    'conversation_add_who_wrote' => 'Bu mesajı kim söyledi?',
    'conversation_add_how' => 'Nasıl iletişim kurdunuz?',
    'conversation_add_you' => 'Siz',
    'conversation_add_content' => 'Söyleneni yazın',
    'conversation_add_what_was_said' => 'Siz ne dediniz?',
    'conversation_add_another' => 'Başka bir mesaj ekle',
    'conversation_add_error' => 'En az bir mesaj eklemelisiniz.',
    'conversation_list_table_messages' => 'Mesajlar',
    'conversation_list_table_content' => 'Kısmi içerik (en son mesaj)',
    'conversation_list_title' => 'Sohbetler',
    'conversation_list_cta' => 'Konuşmayı günlüğe kaydet',

    // age - birthday
    'birthdate_not_set' => 'Doğum tarihi ayarlanmadı',
    'age_approximate_in_years' => 'yaklaşık :age yaşında',
    'age_exact_in_years' => ':age yaşında',
    'age_exact_birthdate' => 'doğum tarihi :date',

    // Last called
    'last_called' => 'Son arama: :date',
    'last_called_empty' => 'Son arama: bilinmiyor',
    'last_activity_date' => 'Birlikte son aktivite: :date',
    'last_activity_date_empty' => 'Birlikte son aktivite: bilinmiyor',

    // additional information
    'information_edit_success' => 'Profil başarıyla güncellendi',
    'information_edit_title' => ':name kişisinin kişisel bilgilerini düzenle',
    'information_edit_max_size' => 'En fazla :size Kb.',
    'information_edit_max_size2' => 'En fazla {size} Kb.',
    'information_edit_firstname' => 'Ad',
    'information_edit_lastname' => 'Soyad (isteğe bağlı)',
    'information_edit_description' => 'Açıklama (İsteğe Bağlı)',
    'information_edit_description_help' => 'Kişi listesine gerekli olduğunda biraz içerik eklemek için kullanılır.',
    'information_edit_unknown' => 'Bu kişinin yaşını bilmiyorum',
    'information_edit_probably' => 'Bu kişi muhtemelen...',
    'information_edit_not_year' => 'Bu kişinin doğum tarihinin gün ve ay kısmını biliyorum, yılını değil…',
    'information_edit_exact' => 'Bu kişinin tam doğum tarihini biliyorum...',
    'information_edit_birthdate_label' => 'Doğum tarihi',
    'information_no_work_defined' => 'Tanımlanmış iş bilgisi yok',
    'information_work_at' => ':company',
    'work_add_cta' => 'İş Bilgilerini Güncelle',
    'work_edit_success' => 'Work information updated',
    'work_edit_title' => 'Güncelle :name kişisinin iş bilgisi',
    'work_edit_job' => 'İş unvanı (isteğe bağlı)',
    'work_edit_company' => 'Şirket (isteğe bağlı)',
    'work_information' => 'İş bilgisi',

    // food preferences
    'food_preferences_add_success' => 'Yiyecek tercihleri kaydedildi',
    'food_preferences_edit_description' => 'Belki :firstname ya da :family\'nin ailesinden birinin bir alerjisi vardır. Veya belirli bir şişe şarabı sevmemektedir. Bunları burada belirtin, böylece onları bir dahaki sefere akşam yemeğine davet ettiğinizde hatırlayacaksınız',
    'food_preferences_edit_description_no_last_name' => 'Belki :firstname\'in bir alerjisi vardır. Veya belirli bir şişe şarabı sevmemektedir. Bunları burada belirtin, böylece onları bir dahaki sefere akşam yemeğine davet ettiğinizde hatırlayacaksınız',
    'food_preferences_edit_title' => 'Yiyecek tercihlerini belirtin',
    'food_preferences_edit_cta' => 'Yiyecek tercihlerini kaydet',
    'food_preferences_title' => 'Yiyecek tercihleri',
    'food_preferences_cta' => 'Yiyecek tercihleri ekle',

    // reminders
    'reminders_blank_title' => ':name ile ilgili hatırlatılmasını istediğiniz bir şey var mı?',
    'reminders_blank_add_activity' => 'Hatırlatıcı ekle',
    'reminders_add_title' => ':name hakkında neyin hatırlatılmasını istersiniz?',
    'reminders_add_description' => 'Lütfen bana şunu hatırlat...',
    'reminders_add_next_time' => 'Bir dahaki sefere ne zaman bunun hatırlatılmasını istersiniz?',
    'reminders_add_once' => 'Bunu sadece bir kere hatırlat',
    'reminders_add_recurrent' => 'Bunu bana hatırlat',
    'reminders_add_starting_from' => 'yukarıda belirtilen tarihten başlayarak',
    'reminders_add_cta' => 'Hatırlatıcı ekle',
    'reminders_edit_update_cta' => 'Hatırlatıcıyı güncelle',
    'reminders_add_error_custom_text' => 'Bu hatırlatıcı için bir metin belirtmeniz gerekmektedir',
    'reminders_create_success' => 'Hatırlatıcı başarıyla eklendi',
    'reminders_delete_success' => 'Hatırlatıcı başarıyla silindi',
    'reminders_update_success' => 'Hatırlatıcı başarıyla güncellendi',
    'reminders_add_optional_comment' => 'İsteğe bağlı yorum',

    'reminder_frequency_day' => 'her gün|[2,*]:number günde bir',
    'reminder_frequency_week' => 'her hafta|[2,*]:number haftada bir',
    'reminder_frequency_month' => 'her ay|[2,*]:number ayda bir',
    'reminder_frequency_year' => 'her yıl|[2,*]:number yılda bir',
    'reminder_frequency_one_time' => ':date tarihinde',
    'reminders_delete_confirmation' => 'Bu hatırlatıcıyı silmek ister misiniz?',
    'reminders_delete_cta' => 'Sil',
    'reminders_next_expected_date' => 'tarihinde',
    'reminders_cta' => 'Hatırlatıcı ekle',
    'reminders_description' => 'Aşağıdaki hatırlatıcılardan her biri için bir e-posta göndereceğiz. Olayların gerçekleşeceği günün sabahında hatırlatmalar gönderilir. Doğum günleri için otomatik olarak eklenen hatırlatıcılar silinemez. Bu tarihleri değiştirmek istiyorsanız, kişilerin doğum tarihlerini düzenleyin.',
    'reminders_one_time' => 'Bir kez',
    'reminders_type_week' => 'hafta',
    'reminders_type_month' => 'ay',
    'reminders_type_year' => 'yıl',
    'reminders_birthday' => ':name\'nin/nun Doğum Günü',
    'reminders_free_plan_warning' => 'Ücretsiz plana dahilsiniz. Bu planda e-posta gönderilmez. Hatırlatıcılarınızı e-posta ile almak için hesabınızı yükseltin.',

    // relationships
    'relationship_form_add' => 'Yeni bir ilişki ekle',
    'relationship_form_edit' => 'Mevcut bir ilişkiyi güncelle',
    'relationship_form_is_with' => 'Bu kişi ...',
    'relationship_form_is_with_name' => ':name...',
    'relationship_form_add_choice' => 'İlişki kiminle?',
    'relationship_form_create_contact' => 'Yeni kişi ekle',
    'relationship_form_associate_contact' => 'Var olan bir kişi',
    'relationship_form_associate_dropdown' => 'Aşağıdaki açılır listeden mevcut bir kişiyi arayın ve seçin',
    'relationship_form_associate_dropdown_placeholder' => 'Mevcut bir kişiyi arayın ve seçin',
    'relationship_form_also_create_contact' => 'Bu kişi için bir Kişi girişi oluşturun.',
    'relationship_form_add_description' => 'Bu, bu kişiye diğer kişileriniz gibi davranmanıza izin verecektir.',
    'relationship_form_add_no_existing_contact' => 'Şu anda :name ile ilişkili olabilecek herhangi bir kişiniz yok.',
    'relationship_delete_confirmation' => 'Bu ilişkiyi silmek istediğinizden emin misiniz? Silme işlemi geri alınamaz.',
    'relationship_unlink_confirmation' => 'Bu ilişkiyi silmek istediğinizden emin misiniz? Bu kişi silinmeyecek - yalnızca ikisi arasındaki ilişki silinecek.',
    'relationship_form_add_success' => 'İlişki başarıyla kuruldu.',
    'relationship_form_deletion_success' => 'İlişki silindi.',

    // tasks
    'tasks_title' => 'Görevler',
    'tasks_blank_title' => 'Henüz bir göreviniz yok.',
    'tasks_form_title' => 'Başlık',
    'tasks_form_description' => 'Açıklama (isteğe bağlı)',
    'tasks_add_task' => 'Görev ekle',
    'tasks_delete_success' => 'Görev başarılı bir şekilde silindi',
    'tasks_complete_success' => 'Görev başarıyla durumu değiştirdi',

    // activities
    'activity_title' => 'Aktiviteler',
    'activity_type_category_simple_activities' => 'Basit aktiviteler',
    'activity_type_category_sport' => 'Spor',
    'activity_type_category_food' => 'Yemek',
    'activity_type_category_cultural_activities' => 'Kültürel aktiviteler',
    'activity_type_just_hung_out' => 'sadece takıldık',
    'activity_type_watched_movie_at_home' => 'evde film izledik',
    'activity_type_talked_at_home' => 'sadece evde konuştuk',
    'activity_type_did_sport_activities_together' => 'birlikte spor yapıldı',
    'activity_type_ate_at_his_place' => 'onların yerinde yemek yedik',
    'activity_type_went_bar' => 'bara gittik',
    'activity_type_ate_at_home' => 'evde yemek yedik',
    'activity_type_picnicked' => 'piknik yaptık',
    'activity_type_ate_restaurant' => 'restoranda yemek yedik',
    'activity_type_went_theater' => 'tiyatroya gittik',
    'activity_type_went_concert' => 'konsere gittik',
    'activity_type_went_play' => 'oyuna gittik',
    'activity_type_went_museum' => 'müzeye gittik',
    'activities_add_activity' => 'Aktivite ekle',
    'activities_add_more_details' => 'Daha fazla ayrıntı ekle',
    'activities_add_emotions' => 'Duygu ekle',
    'activities_add_category' => 'Bir kategori belirt',
    'activities_add_participants_cta' => 'Katılımcıları ekle',
    'activities_item_information' => ':Activity. :date tarihinde oldu',
    'activities_add_title' => '{name} ile ne yaptınız?',
    'activities_summary' => 'Ne yaptığınızı açıklayın',
    'activities_add_pick_activity' => '(İsteğe bağlı) Bu aktiviteyi kategorilere ayırmak ister misiniz? Zorunda değilsin, ama daha sonra size istatistikler verecektir',
    'activities_add_date_occured' => 'Bu aktivite şu tarihte gerçekleşti...',
    'activities_add_participants' => 'Bu aktiviteye {name} dışında kim katıldı? (isteğe bağlı)',
    'activities_add_emotions_title' => 'Bu aktivite sırasında neler hissettiğinizi kaydetmek ister misiniz? (isteğe bağlı)',
    'activities_blank_title' => 'Geçmişte {name} ile ne yaptığınızın ve ne hakkında konuştuğunuzun kaydını tutun',
    'activities_blank_add_activity' => 'Bir aktivite ekle',
    'activities_add_success' => 'Aktivite başarıyla eklendi',
    'activities_add_error' => 'Aktivite eklenirken hata oluştu',
    'activities_update_success' => 'Aktivite başarıyla güncellendi',
    'activities_delete_success' => 'Aktivite başarıyla silindi',
    'activities_who_was_involved' => 'Kimler dahil oldu?',
    'activities_activity' => 'Aktivite Kategorisi',
    'activities_view_activities_report' => 'Aktiviteler raporunu görüntüle',
    'activities_profile_title' => ':name ile sizin aranızdaki aktiviteler raporu',
    'activities_profile_subtitle' => 'Şu ana kadar :name ile toplamda :total_activities, son 12 ayda :activities_last_twelve_months aktiviteyi kayıt altına aldınız.',
    'activities_profile_year_summary_activity_types' => 'İşte :year yılında birlikte gerçekleştirdiğiniz etkinlik türlerinin bir dökümü',
    'activities_profile_year_summary' => 'İşte :year yılında ikinizin yaptıkları',
    'activities_profile_number_occurences' => ':value aktivite',
    'activities_list_participants' => 'Katılımcılar:',
    'activities_list_emotions' => 'Hissedilen duygular:',
    'activities_list_date' => 'Gerçekleşti',
    'activities_list_category' => 'Kategori:',

    // notes
    'notes_create_success' => 'Not başarıyla oluşturuldu',
    'notes_update_success' => 'Not başarıyla kaydedildi',
    'notes_delete_success' => 'Not başarıyla silindi',
    'notes_add_cta' => 'Not ekle',
    'notes_favorite' => 'Favorilere ekle/kaldır',
    'notes_delete_title' => 'Not sil',
    'notes_delete_confirmation' => 'Bu notu silmek istediğinizden emin misiniz? Silme işlemi geri alınamaz',

    // gifts
    'gifts_title' => 'Hediyeler',
    'gifts_add_success' => 'Hediye başarıyla eklendi',
    'gifts_delete_success' => 'Hediye başarıyla silindi',
    'gifts_delete_confirmation' => 'Bu hediyeyi silmek istediğinizden emin misiniz?',
    'gifts_add_gift' => 'Hediye ekle',
    'gifts_link' => 'Link',
    'gifts_for' => '{name} için',
    'gifts_delete_cta' => 'Sil',
    'gifts_add_title' => ':name için hediye yönetimi',
    'gifts_add_gift_idea' => 'Hediye Fikri',
    'gifts_add_gift_already_offered' => 'Hediye önerildi',
    'gifts_add_gift_received' => 'Hediye alındı',
    'gifts_add_gift_title' => 'Bu hediye nedir?',
    'gifts_add_gift_name' => 'Hediye adı',
    'gifts_add_link' => 'Web sayfası linki (isteğe bağlı)',
    'gifts_add_value' => 'Değer (isteğe bağlı)',
    'gifts_add_comment' => 'Yorum (isteğe bağlı)',
    'gifts_add_recipient' => 'Alıcı (isteğe bağlı)',
    'gifts_add_recipient_field' => 'Alıcı',
    'gifts_add_photo' => 'Fotoğraf (isteğe bağlı)',
    'gifts_add_photo_title' => 'Bu hediye için bir fotoğraf ekle',
    'gifts_add_someone' => 'Bu hediye özellikle {name}\'nin ailesinden birisi için',
    'gifts_delete_title' => 'Hediye sil',
    'gifts_ideas' => 'Hediye fikirleri',
    'gifts_offered' => 'Önerilen hediyeler',
    'gifts_offered_as_an_idea' => 'Fikir olarak işaretle',
    'gifts_received' => 'Alınan hediyeler',
    'gifts_view_comment' => 'Yorumu görüntüle',
    'gifts_mark_offered' => 'Önerildi olarak işaretle',
    'gifts_update_success' => 'Hediye başarıyla güncellendi',
    'gifts_add_date' => 'Date (optional)',

    // debts
    'debt_delete_confirmation' => 'Bu borcu silmek istediğinizden emin misiniz?',
    'debt_delete_success' => 'Borç başarıyla silindi',
    'debt_add_success' => 'Borç başarıyla eklendi',
    'debt_title' => 'Borçlar',
    'debt_add_cta' => 'Borç ekle',
    'debt_you_owe' => ':amount borcunuz var',
    'debt_they_owe' => ':name\'in size :amount borcu var',
    'debt_add_title' => 'Borç yönetimi',
    'debt_add_you_owe' => ':name\'e borcunuz var',
    'debt_add_they_owe' => ':name\'in size borcu var',
    'debt_add_amount' => 'toplamı',
    'debt_add_reason' => 'şu sebepten dolayı (isteğe bağlı)',
    'debt_add_add_cta' => 'Borç ekle',
    'debt_edit_update_cta' => 'Borcu güncelle',
    'debt_edit_success' => 'Borç başarıyla güncellendi',
    'debts_blank_title' => ':name\'e olan borçlarınızı ya da :name\'in size olan borçlarını yönetin',

    // tags
    'tag_edit' => 'Etiketi düzenle',
    'tag_add' => 'Etiket ekle',
    'tag_add_search' => 'Etiket ekle veya ara',
    'tag_no_tags' => 'Henüz etiket yok',

    // Introductions
    'introductions_sidebar_title' => 'Nasıl tanıştınız',
    'introductions_blank_cta' => ':name ile nasıl tanıştığınızı belirtin',
    'introductions_title_edit' => ':name ile nasıl tanıştınız?',
    'introductions_additional_info' => 'Nasıl ve nerede tanıştığınızı açıklayın',
    'introductions_edit_met_through' => 'Birisi sizi bu kişiyle tanıştırdı mı?',
    'introductions_no_met_through' => 'Hiç kimse',
    'introductions_first_met_date' => 'Tanıştığınız tarih',
    'introductions_no_first_met_date' => 'Tanıştığımız tarihi bilmiyorum',
    'introductions_first_met_date_known' => 'Tanıştığımız tarih bu',
    'introductions_add_reminder' => 'Bu olayı yıl dönümünde kutlamak için bir hatırlatma ekleyin',
    'introductions_update_success' => 'Bu kişiyle nasıl tanıştığınıza ilişkin bilgileri başarıyla güncellediniz',
    'introductions_met_through' => '<a href=":url">:name</a> aracılığıyla tanıştık',
    'introductions_met_date' => ':date tarihinde tanıştık',
    'introductions_reminder_title' => 'İlk tanıştığınız günün yıl dönümü',

    // Deceased
    'deceased_reminder_title' => ':name\'in ölümünün yıl dönümü',
    'deceased_mark_person_deceased' => 'Bu kişiyi ölmüş olarak işaretleyin',
    'deceased_know_date' => 'Bu kişinin öldüğü tarihi biliyorum',
    'deceased_add_reminder' => 'Bu tarih için bir hatırlatıcı ekleyin',
    'deceased_label' => 'Ölmüş',
    'deceased_date_label' => 'Ölüm tarihi',
    'deceased_label_with_date' => ':date tarihinde öldü',
    'deceased_age' => 'Ölüm yaşı',

    // Contact information
    'contact_info_title' => 'İletişim bilgileri',
    'contact_info_form_content' => 'İçerik',
    'contact_info_form_contact_type' => 'Kişi türü',
    'contact_info_form_personalize' => 'Kişiselleştir',
    'contact_info_address' => 'Yaşadığı yer',

    // Addresses
    'contact_address_title' => 'Adresler',
    'contact_address_form_name' => 'Etiket (isteğe bağlı)',
    'contact_address_form_street' => 'Sokak (isteğe bağlı)',
    'contact_address_form_city' => 'Şehir (isteğe bağlı)',
    'contact_address_form_province' => 'İl (isteğe bağlı)',
    'contact_address_form_postal_code' => 'Posta kodu (isteğe bağlı)',
    'contact_address_form_country' => 'Ülke (isteğe bağlı)',
    'contact_address_form_latitude' => 'Eylem (sadece sayı) (isteğe bağlı)',
    'contact_address_form_longitude' => 'Boylam (sadece sayı) (isteğe bağlı)',

    // Pets
    'pets_kind' => 'Evcil hayvan türü',
    'pets_name' => 'İsim (isteğe bağlı)',
    'pets_create_success' => 'Evcil hayvan başarıyla eklendi',
    'pets_update_success' => 'Evcil hayvan güncellendi',
    'pets_delete_success' => 'Evcil hayvan silindi',
    'pets_title' => 'Evcil hayvanlar',
    'pets_reptile' => 'Sürüngen',
    'pets_bird' => 'Kuş',
    'pets_cat' => 'Kedi',
    'pets_dog' => 'Köpek',
    'pets_fish' => 'Balık',
    'pets_hamster' => 'Hamster',
    'pets_horse' => 'At',
    'pets_rabbit' => 'Tavşan',
    'pets_rat' => 'Fare',
    'pets_small_animal' => 'Küçük hayvan',
    'pets_other' => 'Diğer',

    // life events
    'life_event_list_tab_life_events' => 'Yaşam olayları',
    'life_event_list_tab_other' => 'Notlar, hatırlatmalar, ...',
    'life_event_list_title' => 'Yaşam olayları',
    'life_event_blank' => 'Gelecekteki referansınız için {name}\'in hayatına ne olacağını kaydedin.',
    'life_event_list_cta' => 'Yaşam olayı ekleyin',
    'life_event_create_category' => 'Tüm kategoriler',
    'life_event_create_life_event' => 'Yaşam olayı ekleyin',
    'life_event_create_default_title' => 'Başlık (isteğe bağlı)',
    'life_event_create_default_story' => 'Hikaye (isteğe bağlı)',
    'life_event_create_date' => 'Bir ay veya bir gün belirtmeniz gerekmemektedir - sadece yıl zorunludur.',
    'life_event_create_default_description' => 'Bildikleriniz hakkında bilgi ekleyin',
    'life_event_create_add_yearly_reminder' => 'Bu etkinlik için yıllık hatırlatıcı ekleyin',
    'life_event_create_success' => 'Yaşam olayı eklendi',
    'life_event_delete_title' => 'Bir yaşam olayını silin',
    'life_event_delete_description' => 'Bu yaşam olayını silmek istediğinizden emin misiniz? Silme işlemi geri alınamaz.',
    'life_event_delete_success' => 'Yaşam olayı silindi',
    'life_event_date_it_happened' => 'Meydana geldiği tarih',
    'life_event_category_work_education' => 'İş & eğitim',
    'life_event_category_family_relationships' => 'Aile & ilişkiler',
    'life_event_category_home_living' => 'Ev & yaşam',
    'life_event_category_health_wellness' => 'Sağlık & sıhhat',
    'life_event_category_travel_experiences' => 'Seyahat & deneyimler',
    'life_event_sentence_new_job' => 'Yeni bir iş başlatmak',
    'life_event_sentence_retirement' => 'Emekli olmak',
    'life_event_sentence_new_school' => 'Okula başlamak',
    'life_event_sentence_study_abroad' => 'Yurtdışında eğitim görmek',
    'life_event_sentence_volunteer_work' => 'Gönüllü çalışmaya başlamak',
    'life_event_sentence_published_book_or_paper' => 'Bir makale yayınlamak',
    'life_event_sentence_military_service' => 'Askerliğe başlamak',
    'life_event_sentence_new_relationship' => 'Bir ilişkiye başlamak',
    'life_event_sentence_engagement' => 'Nişanlanmak',
    'life_event_sentence_marriage' => 'Evlenmek',
    'life_event_sentence_anniversary' => 'Yıldönümü',
    'life_event_sentence_expecting_a_baby' => 'Bebek beklemek',
    'life_event_sentence_new_child' => 'Çocuk sahibi olmak',
    'life_event_sentence_new_family_member' => 'Bir aile üyesi eklemek',
    'life_event_sentence_new_pet' => 'Evcil hayvan almak',
    'life_event_sentence_end_of_relationship' => 'Bir ilişkiyi sonlandırmak',
    'life_event_sentence_loss_of_a_loved_one' => 'Sevdiği birini kaybetmek',
    'life_event_sentence_moved' => 'Taşınmak',
    'life_event_sentence_bought_a_home' => 'Ev satın almak',
    'life_event_sentence_home_improvement' => 'Evde iyileştirme yapmak',
    'life_event_sentence_holidays' => 'Tatile gitmek',
    'life_event_sentence_new_vehicle' => 'Yeni araç almak',
    'life_event_sentence_new_roommate' => 'Oda arkadaşı edinmek',
    'life_event_sentence_overcame_an_illness' => 'Bir hastalığı yenmek',
    'life_event_sentence_quit_a_habit' => 'Bir alışkanlığı bırakmak',
    'life_event_sentence_new_eating_habits' => 'Yeni yeme alışkanlıkları başlatmak',
    'life_event_sentence_weight_loss' => 'Kilo vermek',
    'life_event_sentence_wear_glass_or_contact' => 'Gözlük veya lens takmaya başlamak',
    'life_event_sentence_broken_bone' => 'Bir kemiği kırmak',
    'life_event_sentence_removed_braces' => 'Diş tellerini kaldırmak',
    'life_event_sentence_surgery' => 'El cerrahisi',
    'life_event_sentence_dentist' => 'Dişçiye gitmek',
    'life_event_sentence_new_sport' => 'Bir spora başlamak',
    'life_event_sentence_new_hobby' => 'Bir hobiye başlamak',
    'life_event_sentence_new_instrument' => 'Yeni bir çalgı aleti öğrenmek',
    'life_event_sentence_new_language' => 'Yeni bir dil öğrenmek',
    'life_event_sentence_tattoo_or_piercing' => 'Dövme veya piercing yaptırmak',
    'life_event_sentence_new_license' => 'Bir lisans sahibi olmak',
    'life_event_sentence_travel' => 'Seyahat etmek',
    'life_event_sentence_achievement_or_award' => 'Bir başarı veya ödül almak',
    'life_event_sentence_changed_beliefs' => 'İnançlarını değiştirmek',
    'life_event_sentence_first_word' => 'İlk defa konuşmak',
    'life_event_sentence_first_kiss' => 'İlk defa öpüşmek',

    // documents
    'document_list_title' => 'Belgeler',
    'document_list_cta' => 'Belge yükleyin',
    'document_list_blank_desc' => 'Burada, bu kişiyle ilgili belgeleri saklayabilirsiniz.',
    'document_upload_zone_cta' => 'Dosya Yükle',
    'document_upload_zone_progress' => 'Belge karşıya yükleniyor...',
    'document_upload_zone_error' => 'Dosya karşıya yüklenirken bir hata oluştu. Lütfen aşağıdan tekrar deneyin.',

    // Photos
    'photo_title' => 'Fotoğraflar',
    'photo_list_title' => 'İlgili fotoğraflar',
    'photo_list_cta' => 'Fotoğraf yükle',
    'photo_list_blank_desc' => 'Bu kişiyle ilgili görüntüleri saklayabilirsiniz. Şimdi bir tane yükle!',
    'photo_upload_zone_cta' => 'Bir fotoğraf yükle',
    'photo_current_profile_pic' => 'Mevcut profil resmi',
    'photo_make_profile_pic' => 'Profil resmi yapın',
    'photo_delete' => 'Fotoğrafı sil',
    'photo_next' => 'Next photo ❯',
    'photo_previous' => '❮ Previous photo',

    // Avatars
    'avatar_change_title' => 'Avatarınızı değiştirin',
    'avatar_question' => 'Hangi avatarı kullanmak istersiniz?',
    'avatar_default_avatar' => 'Varsayılan avatar',
    'avatar_adorable_avatar' => 'Adorable avatarı',
    'avatar_gravatar' => 'Bu kişinin e-posta adresiyle ilişkili Gravatar.<a href="https://gravatar.com/">Gravatar</a>, kullanıcıların e-posta adreslerini fotoğraflarla ilişkilendirmelerini sağlayan global bir sistemdir.',
    'avatar_current' => 'Mevcut avatarı kullanın',
    'avatar_photo' => 'Yüklediğiniz bir fotoğraftan',
    'avatar_crop_new_avatar_photo' => 'Yeni profil resmini kırp',

    // emotions
    'emotion_this_made_me_feel' => 'Bu size … hissettirdi',

    // logs
    'auditlogs_link' => 'Geçmiş',
    'auditlogs_title' => 'Bu hesaba ait tüm kayıtlar',
    'auditlogs_breadcrumb' => 'Geçmiş',
    'auditlogs_author' => ':date tarihinde :name adına göre',

    // contact field label
    'contact_field_label_home' => 'Ev',
    'contact_field_label_work' => 'Iş',
    'contact_field_label_cell' => 'Cep Telefonu',
    'contact_field_label_fax' => 'Faks',
    'contact_field_label_pager' => 'Çağrı Cihazı',
    'contact_field_label_main' => 'Ana',
    'contact_field_label_other' => 'Diğer',
    'contact_field_label_personal' => 'Kişisel',
];
