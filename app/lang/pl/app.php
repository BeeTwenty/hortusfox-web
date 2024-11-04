<?php

/*
	Asatru PHP - Polish language file

	Extend this with your phrases
	
	Set variables with {variable-name}
*/

return [
	'workspace_title' => '{name} (' . env('APP_NAME') . ' v' . env('APP_VERSION') . ')',
	'enter_email' => 'Wprowadź adres e-mail',
	'enter_password' => 'Wprowadź hasło',
	'enter_password_confirmation' => 'Potwierdź hasło',
	'login' => 'Zaloguj',
	'logout' => 'Wyloguj',
	'user_not_found' => 'Nie znaleziono użytkownika: {email}',
	'password_mismatch' => 'Hasła nie są takie same',
	'password' => 'Hasło',
	'password_confirmation' => 'Hasło (potwierdzenie)',
	'restore_password' => 'Przywróć hasło',
	'restore_password_info' => 'Postępuj zgodnie z instrukcjami, które zostały przesłane na Twoje konto e-mail.',
	'reset_password' => 'Zresetuj hasło',
	'reset_password_hint' => 'Aby zresetować hasło dostępu do {workspace}, przejdź do poniższego linku: <a href="{url}">Zresetuj hasło</a>',
	'dashboard' => 'Panel główny',
	'welcome_message' => 'Witaj z powrotem {name}!',
	'locations' => 'Miejsca',
	'select_location_to_proceed' => 'Wybierz miejsce aby zobaczyć przypisane do niego rośliny',
	'plants' => 'Rośliny',
	'add_plant' => 'Dodaj roślinę',
	'add_plant_short' => 'Dodaj',
	'edit_plant' => 'Edytuj roślinę',
	'attribute' => 'Atrybut',
	'value' => 'Wartość',
	'location' => 'Miejsce',
	'last_watered' => 'Ostatnia data podlewania',
	'last_repotted' => 'Ostatnia data przesadzenia',
	'last_fertilised' => 'Ostatnia data naworzenia',
	'perennial' => 'Wieloletnia',
	'annual' => 'Roczna',
	'cutting_month' => 'Miesiąc przycinania',
	'date_of_purchase' => 'Data zakupu',
	'humidity' => 'Wilgotność',
	'light_level' => 'Poziom światła',
	'health_state' => 'Stan zdrowia',
	'in_good_standing' => 'W dobrej kondycji',
	'overwatered' => 'Przesiąknięty wodą',
	'withering' => 'Zwiędnięta',
	'infected' => 'Zainfekowana',
	'pest_infestation' => 'Inwazja szkodników',
	'transplant_shock' => 'Szok przeszczepowy',
	'nutritional_deficiency' => 'Niedobory żywieniowe',
	'sunburn' => 'Oparzenie słoneczne',
	'frostbite' => 'Odmrożenie',
	'root_rot' => 'Zgnite korzenie',
	'plant_warning' => 'Uwaga: Roślina ta wymaga specjalnego monitorowania. Powód: {reason}',
	'notes' => 'Notatki',
	'no_notes_specified' => 'Nie dodano jeszcze notatek',
	'select_month' => '- Wybierz miesiąc -',
	'select_light_level' => '- Wybierz poziom światła -',
	'january' => 'Styczeń',
	'february' => 'Luty',
	'march' => 'Marzec',
	'april' => 'Kwiecień',
	'may' => 'Maj',
	'june' => 'Czerwiec',
	'july' => 'Lipiec',
	'august' => 'Sierpień',
	'september' => 'Wrzesień',
	'october' => 'Październik',
	'november' => 'Listopad',
	'december' => 'Grudzień',
	'yes' => 'Tak',
	'no' => 'Nie',
	'back_to_list' => 'Powrót do listy',
	'back_to_dashboard' => 'Powrót do Panelu Głównego',
	'name' => 'Imię',
	'email' => 'E-Mail',
	'photo' => 'Zdjęcie',
	'add' => 'Dodaj',
	'cancel' => 'Anuluj',
	'last_edited_by' => 'Ostatnio edytowano: {when} (przez {name})',
	'edit_property' => 'Edytuj właściwość',
	'save' => 'Zapisz',
	'light_level_sunny' => 'Słonecznie',
	'light_level_half_shade' => 'Pół-Cień',
	'light_level_full_shade' => 'Cień',
	'warning_plants_title' => 'Następujące rośliny wymagają szczególnej uwagi',
	'warning_plants_all_ok' => 'Hurra! Żadna roślina nie jest obecnie zagrożona',
	'view_plant_details' => 'Zobacz szczegóły rośliny',
	'log_title' => 'Log',
	'loading_please_wait' => 'Proszę czekać...',
	'error' => 'Błędy',
	'photos' => 'zdjęcia',
	'no_photos_yet' => 'Obecnie nie przesłano żadnych dodatkowych zdjęć',
	'upload' => 'Prześlij',
	'upload_photo' => 'Prześlij zdjęcie',
	'label' => 'Etykieta',
	'confirmPhotoRemoval' => 'Czy na pewno chcesz usunąć to zdjęcie?',
	'users' => 'Użytkownicy',
	'photo_uploaded_successfully' => 'Zdjęcie zostało przesłane pomyślnie',
	'success' => 'Sukces',
	'profile' => 'Profil',
	'profile_hint' => 'Zalogowano jako {name} ({email})',
	'last_authored_plants' => 'ostatnio edytowane rośliny',
	'search' => 'Wyszukaj',
	'search_hint' => 'Wyszukaj w bazie danych',
	'input_search' => 'Wpisz tekst do wyszukania',
	'search_name' => 'Uwzględnij nazwy w wyszukiwaniu',
	'search_scientific_name' => 'Uwzględnij nazwy naukowe w wyszukiwaniu',
	'search_tags' => 'Uwzględnij tagi w wyszukiwaniu',
	'search_notes' => 'Uwzględnij notatki w wyszukiwaniu',
	'no_tags_specified' => 'Nie określono jeszcze żadnych tagów',
	'remove_plant' => 'Usuń roślinę',
	'confirmPlantRemoval' => 'Czy na pewno chcesz usunąć tą roślinę?',
	'tasks' => 'Zadania',
	'tasks_hint' => 'Tutaj możesz zarządzać wymaganymi zadaniami związanymi z pielęgnacją roślin',
	'create_task' => 'Dodaj zadanie',
	'create_new' => 'Dodaj nowe',
	'title' => 'Tytuł',
	'description' => 'Opis',
	'task_created_successfully' => 'Zadanie zostało utworzone pomyślnie',
	'tasks_todo' => 'Do zrobienia',
	'tasks_done' => 'Zrobione',
	'done' => 'Zrobione',
	'edit_task' => 'Edytuj zadanie',
	'task_edited_successfully' => 'Zadanie zostało pomyślnie edytowane',
	'scientific_name' => 'Nazwa naukowa',
	'text' => 'Tekst',
	'link' => 'Link',
	'preferences' => 'Preferencje',
	'edit_preferences' => 'Edytuj preferencje',
	'language' => 'Język',
	'show_log' => 'Pokaż log',
	'preferences_saved_successfully' => 'Preferencje zostały zapisane pomyślnie',
	'set_watered' => 'Ustaw jako podlane',
	'bulk_set_watered' => 'Ustaw grupę roślin jako podlane',
	'all_plants_watered' => 'Dla tych roślin zaktualizowano status ostatniego podlewania',
	'confirmSetAllWatered' => 'Czy na pewno chcesz zaktualizować datę ostatniego podlewania wszystkich tych roślin?',
	'no_plants_found' => 'Nie znaleziono żadnych roślin dla tego zapytania',
	'inventory' => 'Wyposażenie',
	'inventory_hint' => 'Zarządzaj swoim wyposażeniem',
	'group' => 'Grupa',
	'confirmInventoryItemRemoval' => 'Na pewno chcesz usunąć tą pozycję z wyposażenia?',
	'add_inventory_item' => 'Dodaj pozycję do wyposażenia',
	'edit_inventory_item' => 'Edytuj pozycję wyposażenia',
	'manage_groups' => 'Zarządzaj grupami',
	'token' => 'Token',
	'close' => 'Zamknij',
	'chat' => 'Czat',
	'chat_hint' => 'To jest czat grupowy w obszarze roboczym',
	'send' => 'Wyślij',
	'new' => 'Nowy',
	'chatcolor' => 'Kolor czatu dla użytkownika',
	'currentlyOnline' => 'Aktualnie online: ',
	'no_photo_available' => 'Brak dostępnego zdjęcia',
	'due' => 'Termin',
	'overdue_tasks' => 'Zaległe zadania',
	'view_task_details' => 'View task details',
	'admin_area' => 'Obszar administracji',
	'environment' => 'Środowisko',
	'workspace' => 'Obszar roboczy',
	'enable_scroller' => 'Włącz scroller',
	'online_time_limit' => 'Limit czasu statusu online',
	'show_chat_onlineusers' => 'Pokaż użytkowników, którzy są aktualnie online',
	'show_chat_typingindicator' => 'Show chat typing indicator',
	'admin' => 'Administrator',
	'create' => 'Utwórz',
	'update' => 'Edytuj',
	'remove' => 'Usuń',
	'create_user' => 'Utwórz użytkownika',
	'account_created' => 'Konto zostało utworzone',
	'account_created_hint' => 'Twoje konto w {workspace} właśnie zostało utworzone. Proszę <a href="{url}">zalogować się</a>, podając swój adres e-mail i hasło <strong>{password}</strong>. Zdecydowanie zaleca się zmianę hasła po zalogowaniu.',
	'environment_settings_saved' => 'Pomyślnie zapisano ustawienia środowiska',
	'user_created_successfully' => 'Nowy użytkownik został utworzony pomyślnie',
	'user_updated_successfully' => 'Dane użytkownika zostały pomyślnie zaktualizowane',
	'user_removed_successfully' => 'Konto użytkownika zostało pomyślnie usunięte',
	'confirm_user_removal' => 'Czy na pewno chcesz usunąć to konto użytkownika?',
	'sorting_type_name' => 'Alfabetycznie',
	'sorting_type_last_watered' => 'Ostatnia data podlewania',
	'sorting_type_last_repotted' => 'Ostatnia data przesadzania',
	'sorting_type_last_fertilised' => 'Ostatnia data nawożenia',
	'sorting_type_health_state' => 'Stan zdrowia',
	'sorting_type_perennial' => 'Wieloletnia',
	'sorting_type_annual' => 'Roczna',
	'sorting_type_light_level' => 'Poziom światła',
	'sorting_type_humidity' => 'Wilgotność',
	'sorting_dir_asc' => 'Rosnąco',
	'sorting_dir_desc' => 'Malejąco',
	'filter_by_text' => 'Filtruj według tekstu',
	'mail_info_task_overdue' => 'Zadanie jest spóźnione',
	'mail_info_task_overdue_hint' => 'Zadanie <strong>{name}</strong> jest spóźnione! Termin: {data}. Przejdź do zadań: <a href="{url}">{url}</a>',
	'notify_tasks_overdue' => 'Powiadamiaj mnie o zaległych zadaniach',
	'mail_info_task_tomorrow' => 'Zadanie ma zostać oddane na jutro',
	'mail_info_task_tomorrow_hint' => 'Zadanie <strong>{name}</strong> ma zostać wykonane jutro. Termin: {data}. Przejdź do zadań: <a href="{url}">{url}</a>',
	'notify_tasks_tomorrow' => 'Powiadamiaj mnie o zadaniach, które mają zostać wykonane na jutro',
	'mail_info_calendar_reminder' => 'Informacje przypomnienia w kalendarzu',
	'mail_info_calendar_reminder_hint' => 'Termin elementu kalendarza <strong>{name}</strong>: {date_from} - {date_till}. Przejdź do kalendarza: <a href="{url}">{url}</a>',
	'notify_calendar_reminder' => 'Przypomnij mi o terminach kalendarzowych',
	'cronpw' => 'Token uwierzytelniania Cronjob',
	'custom_head_code' => 'Niestandardowy kod dla sekcji głowy',
	'custom_head_code_hint' => 'OSTRZEŻENIE: Uszkodzony kod może spowodować uszkodzenie dokumentu. Upewnij się, że wiesz, co robisz',
	'enable_tasks' => 'Włącz zadania',
	'enable_inventory' => 'Włącz zasoby',
	'enable_calendar' => 'Włącz kalendarz',
	'enable_chat' => 'Włącz czat',
	'add_location' => 'Dodaj miejsce',
	'icon' => 'Ikona',
	'active' => 'Aktywny',
	'location_added_successfully' => 'Miejsce zostało dodane pomyślnie',
	'location_updated_successfully' => 'Miejsce zostało edytowane pomyślnie',
	'location_migration' => 'Miejsce do przeniesienia roślin',
	'remove_location' => 'Usuń miejsce',
	'location_removed_successfully' => 'Miejsce zostało usunięte pomyślnie',
	'check_for_new_version' => 'Sprawdź nową wersję',
	'new_version_available' => 'Wersja {new_version} jest dostępna. Pobierz ją <a href="{url}">tutaj</a>.',
	'no_new_version_available' => 'Używasz najnowszej wersji.',
	'admin_media' => 'Media',
	'media_logo' => 'Logo obszaru roboczego (obraz .png)',
	'media_banner' => 'Obraz banera obszaru roboczego (.jpg)',
	'media_background' => 'Obraz tła obszaru roboczego (.jpg)',
	'media_saved' => 'Media zostały pomyślnie zapisane',
	'enable_history' => 'Włącz historię',
	'history_name' => 'Nazwa historii',
	'confirmPlantAddHistory' => 'Czy chcesz wykonać tę akcję?',
	'confirmPlantRemoveHistory' => 'Czy chcesz wykonać tę akcję?',
	'sorting_type_history_date' => 'Data historii',
	'restore_from_history' => 'Przywrócić',
	'content_empty' => 'Coś tutaj pusto...',
	'last_added_plants' => 'Ostatnio dodane rośliny',
	'info' => 'Informacje',
	'hortusfox_version' => 'HortusFox v{version}',
	'php_version' => 'PHP Version: {version}',
	'mysql_version' => 'MySQL Version: {version}',
	'server_system_info' => 'Server: {osn} {osv} on {mt}',
	'server_timezone' => 'Timezone: {time}',
	'render_time' => 'Render time: {time}s',
	'background_overlay_alpha' => 'Wartość alfa nakładki',
	'all_tasks_done' => 'Obecnie nie ma żadnych otwartych zadań',
	'last_added_or_updated_plants_hint' => 'Wybierz tryb ostatnich roślin',
	'show_plants_aoru_added' => 'Pokaż ostatnio dodane rośliny',
	'show_plants_aoru_updated' => 'Pokaż ostatnie autorskie rośliny',
	'mail' => 'Mail',
	'smtp_fromname' => 'Nazwa nadawcy wiadomości e-mail',
	'smtp_fromaddress' => 'Adres nadawcy e-maila',
	'smtp_host' => 'Host SMTP',
	'smtp_port' => 'Port SMTP',
	'smtp_username' => 'Użytkownik SMTP',
	'smtp_password' => 'Hasło SMTP',
	'smtp_encryption' => 'Szyfrowanie SMTP',
	'personal_notes' => 'Notatki osobiste',
	'personal_notes_saved_successfully' => 'Twoje notatki osobiste zostały pomyślnie zaktualizowane',
	'share_photo' => 'Udostępnij zdjęcie',
	'share_photo_input' => 'Zdjęcie do udostępnienia',
	'share_photo_title' => 'Tytuł',
	'share_photo_hint' => 'Spowoduje to przesłanie Twojego zdjęcia do witryny {url}, dzięki czemu będziesz mógł udostępnić je innym. Po pomyślnym udostępnieniu otrzymasz wiadomość e-mail z potwierdzeniem.',
	'share' => 'Udostępnij',
	'copy_to_clipboard' => 'Kopiuj',
	'copied_to_clipboard' => 'Treść została skopiowana do schowka.',
	'mail_share_photo' => 'Notatki na temat udostępnionego zdjęcia',
	'mail_share_photo_title' => 'Twoje zdjęcie zostało udostępnione',
	'mail_share_photo_hint' => 'Twoje zdjęcie zostało pomyślnie udostępnione!<br/><br/>Link do zdjęcia: {url_photo}><br/>Link do usunięcia: {url_removal}',
	'enable_photo_share' => 'Włącz udostępnianie zdjęć',
	'restore_password_email_placeholder' => 'Wpisz swój adres e-mail',
	'search_for_location_icons' => 'Szukaj ikon <a href="{url}" target="_blank">tutaj</a>.',
	'upcoming_tasks_overview' => 'Nadchodzące zadania',
	'view_more' => 'Zobacz więcej',
	'generate' => 'Wygeneruj',
	'generate_cronpw_hint' => 'Uwaga: Wygenerowanie nowego tokena unieważnia bieżący',
	'confirmSetAllRepotted' => 'Czy na pewno chcesz zaktualizować datę ostatniego przesadzenia wszystkich tych roślin?',
	'all_plants_repotted' => 'Dla tych roślin zaktualizowano status ostatniego przesadzenia',
	'set_repotted' => 'Ustaw do przesadzenia',
	'bulk_set_repotted' => 'Ustaw rośliny do przesadzenia',
	'backup' => 'Kopia zapasowa',
	'gallery' => 'Galeria',
	'export' => 'Eskportuj',
	'import' => 'Importuj',
	'import_successful' => 'Import powiódł się!',
	'pwa_enable' => 'Włącz obsługę PWA',
	'home' => 'Home',
	'enable_system_messages' => 'Włącz komunikaty systemowe',
	'plant_count' => '{count} roślin',
	'danger_count' => '{count} zagrożonych',
	'all_in_good_standing' => 'Wszystko w porządku',
	'theme' => 'Motyw',
	'themes' => 'Motywy',
	'confirm_generate_new_token' => 'Wygenerowanie nowego tokena spowoduje unieważnienie poprzedniego. Czy chcesz kontynuować?',
	'themes_hint' => 'Tutaj możesz importować motywy. Wybierz plik zip motywu, który chcesz zaimportować, a po pomyślnym zaimportowaniu motyw będzie dostępny dla wszystkich użytkowników. Uwaga: Jeśli archiwum zip zawiera wiele motywów, system spróbuje zaimportować je wszystkie.',
	'theme_import_successful' => 'Import był udany. Zaimportowane motywy: {count}',
	'theme_list' => 'Lista zainstalowanych motywów',
	'confirm_theme_removal' => 'Czy na pewno chcesz usunąć ten motyw?',
	'send_confirmation_email' => 'Wyślij e-mail z potwierdzeniem',
	'create_your_first_location' => 'Nie dodano jeszcze żadnych miejsc. <a href="{url}">utwórz swoje pierwsząe miejsce</a>, aby dodać rośliny.',
	'error_room_not_empty' => 'Miejsce nie jest puste. Aby móc usunąć to Miejsce, musisz albo utworzyć inne miejsce, do którego chcesz przenieść rośliny, albo usunąć wszystkie rośliny z tego miejsca.',
	'extensions' => 'Rozszerzenia',
	'expand' => 'Rozszerz',
	'collapse' => 'Zwiń',
	'theme_name' => 'Nazwa',
	'theme_version' => 'Wersja',
	'theme_author' => 'Autor',
	'theme_contact' => 'Kontakt',
	'all' => 'Wszystko',
	'user_created_password' => 'Hasło użytkownika: <strong>{pw}</strong>. Prosimy o przekazanie tego hasła użytkownikowi i poinformowanie o jego zmianie po zalogowaniu.',
	'calendar' => 'Kalendarz',
	'calendar_hint' => 'Tutaj możesz zarządzać ważnymi datami',
	'range' => 'Zakres',
	'go' => 'Idź',
	'add_calendar_item' => 'Dodaj element',
	'date_from' => 'Data od',
	'date_till' => 'Data do',
	'calendar_item_added' => 'Element został pomyślnie dodany',
	'calendar_class' => 'Klasa',
	'calendar_class_water' => 'Podlewanie',
	'calendar_class_repot' => 'Przesadzenie',
	'calendar_class_fertilise' => 'Nawożenie',
	'calendar_class_purchase' => 'Kupno',
	'calendar_class_cut' => 'Podcinanie',
	'calendar_class_treat' => 'Leczenie',
	'calendar_class_harvest' => 'Zbiór',
	'calendar_class_other' => 'Inne',
	'edit_calendar_item' => 'Edytuj element',
	'calendar_item_edited' => 'Element został pomyślnie edytowany',
	'timespan_select' => '- Wybierz zakres -',
	'timespan_one_week' => '1 tydzień',
	'timespan_two_weeks' => '2 tygodnie',
	'timespan_one_month' => '1 miesiąc',
	'timespan_three_months' => '3 miesiące',
	'timespan_half_a_year' => 'Pół roku',
	'remove_calendar_item' => 'Usuń element',
	'confirm_remove_calendar_item' => 'Czy na pewno chcesz usunąć ten element?',
	'calendar_overview' => 'Daty przyszłego tygodnia',
	'show_calendar_view' => 'Pokaż widok kalendarza na Panelu głównym',
	'show_plant_id' => 'Pokaż ID roślin na listach',
	'unknown_calendar_class' => 'Nieznane',
	'add_calendar_class' => 'Dodaj klasę kalendarza',
	'calendar_class_ident' => 'Identyfikator',
	'calendar_class_name' => 'Nazwa',
	'calendar_class_color_background' => 'Kolor tła',
	'calendar_class_color_border' => 'Kolor ramki',
	'calendar_class_added_successfully' => 'Klasa kalendarza została pomyślnie dodana',
	'calendar_class_edited_successfully' => 'Klasa kalendarza została pomyślnie edytowana',
	'confirm_remove_calendar_class' => 'Czy na pewno chcesz usunąć tę klasę kalendarza?',
	'clone_plant' => 'Duplikuj roślinę',
	'show_qr_code' => 'Pokaż kod QR',
	'qr_code' => 'Kod QR',
	'print' => 'Drukuj',
	'bulk_print_qr_codes' => 'Drukuj kody QR',
	'bulk_qrcodes' => 'Drukowanie wielu kodów QR',
	'select_all' => 'Wybierz wszystkie',
	'unselect_all' => 'Odznacz wszystkie',
	'noListItemsSelected' => 'Nie wybrano żadnych elementów',
	'set_fertilised' => 'Ustaw jako nawożone',
	'bulk_set_fertilised' => 'Ustaw rośliny jako nowożone',
	'confirmSetAllFertilised' => 'Czy na pewno chcesz zaktualizować ostatni termin nawożenia wszystkich tych roślin?',
	'all_plants_fertilised' => 'Dla tych roślin zaktualizowano status ostatniego zapłodnienia',
	'media_sound_message' => 'Dźwięk nowej wiadomości',
	'location_fmt' => 'Miejsce: <span>{loc}</span>',
	'weather' => 'Pogoda',
	'enable_weather' => 'Włącz OpenWeatherMap',
	'weather_api_key' => 'Klucz API',
	'weather_latitude' => 'Szerokość geograficzna',
	'weather_longitude' => 'Wysokość geograficzna',
	'weather_autodetect_latlong' => 'Wykryj geolokalizację',
	'weather_hint' => 'Zobacz aktualną prognozę pogody dla {region}',
	'weather_unittype' => 'Typ jednoski',
	'weather_cache' => 'Czas trwania pamięci podręcznej cache (sekundy)',
	'monday' => 'Poniedziałek',
	'tuesday' => 'Wtorek',
	'wednesday' => 'Środa',
	'thursday' => 'Czwartek',
	'friday' => 'Piątek',
	'saturday' => 'Sobota',
	'sunday' => 'Niedziela',
	'api' => 'API',
	'api_key_added' => 'Nowy klucz API został pomyślnie dodany',
	'api_key_removed' => 'Klucz API został pomyślnie usunięty',
	'toggle' => 'Przełącznik',
	'confirm_remove_api_key' => 'Czy na pewno chcesz usunąć ten klucz API?',
	'add_custom_attribute' => 'Dodaj atrybut niestandardowy',
	'datatype' => 'Typ danych',
	'content' => 'Treść',
	'edit_custom_attribute' => 'Edytuj atrybut niestandardowy',
	'remove_custom_attribute' => 'Usuń atrybut',
	'confirm_remove_custom_attribute' => 'Czy na pewno chcesz usunąć ten atrybut?',
	'timezone' => 'Strefa czasowa',
	'attributes' => 'Atrybuty',
	'attributes_visibility_hint' => 'Tutaj możesz wybrać, które domyślne atrybuty roślin będą dostępne.',
	'confirm_remove_task' => 'Czy na pewno chcesz usunąć to zadanie?',
	'plant_photo_orientation_hint' => 'Proszę użyć orientacji pionowej dla głównego zdjęcia.',
	'select' => 'Wybierz',
	'custom_attribute_datatype_bool' => 'Wartość Tak/Nie',
	'custom_attribute_datatype_int' => 'Liczba całkowita',
	'custom_attribute_datatype_double' => 'Liczba zmienno przecinkowa',
	'custom_attribute_datatype_string' => 'Tekst',
	'custom_attribute_datatype_datetime' => 'Data',
	'attributes_schema_hint' => 'Tutaj możesz zarządzać atrybutami roślin, które są globalnie dostępne dla wszystkich roślin',
	'attribute_schema_added_successfully' => 'Globalny atrybut rośliny został pomyślnie dodany',
	'attribute_schema_edited_successfully' => 'Globalny atrybut zakładu został pomyślnie zaktualizowany',
	'attribute_schema_removed_successfully' => 'Globalny atrybut zakładu został pomyślnie usunięty',
	'confirm_remove_attribute_schema' => 'Czy na pewno chcesz usunąć ten element?',
	'allow_custom_attributes' => 'Zezwalaj użytkownikom na zarządzanie niestandardowymi atrybutami specyficznymi dla roślin',
	'admin_api_hint' => 'Tutaj możesz zarządzać kluczami API dla swojego obszaru roboczego. Klucze API są wymagane do wykonywania żądań API REST w Twoim obszarze roboczym.',
	'plant_log' => 'Log Rośliny',
	'plant_log_content' => 'Zawartość',
	'plant_log_date' => 'Utworzono / Zaktualizowano',
	'plant_log_actions' => 'Akcje',
	'no_plant_log_entries_yet' => 'Nie ma jeszcze żadnych wpisów w dzienniku instalacji.',
	'add_plant_log_entry' => 'Dodaj wpis',
	'edit_plant_log_entry' => 'Edytuj wpis',
	'confirm_remove_plant_log_entry' => 'Czy na pewno chcesz usunąć ten wpis?',
	'system_message_plant_log' => 'Dodaj komunikaty systemowe roślin do dziennika',
	'load_more' => 'Załaduj więcej',
	'operationSucceeded' => 'Operacja się powiodła',
	'admin_support' => 'Support',
	'mail_rp_address' => 'Reverse Proxy',
	'photo_edit_specify_url' => 'Określ adres URL zasobu zewnętrznego',
	'photo_edit_specify_file' => 'Wybierz plik do przesłania',
	'photo_edit_url_placeholder' => 'Wprowadź URL...',
	'donation_sponsoring' => 'GitHub Sponsoring',
	'donation_kofi' => 'Buy Me a Coffee',
	'auto_backup' => 'Włącz automatyczną kopię zapasową',
	'auto_backup_cronjob_url' => 'Cronjob URL',
	'backup_path' => 'Opcjonalna ścieżka do przechowywania plików kopii zapasowych',
	'backup_settings_stored' => 'Ustawienia kopii zapasowej zadania cronjob zostały pomyślnie zapisane',
	'auto_backup_not_active' => 'Funkcja automatycznego tworzenia kopii zapasowych nie została jeszcze aktywowana',
	'shared_photos' => 'Udostępnione zdjęcia',
	'confirm_remove_shared_photo' => 'Czy na pewno chcesz usunąć ten element?',
	'share_photo_public' => 'Udostępnij to zdjęcie publicznie',
	'share_photo_description' => 'Opis',
	'share_photo_keywords' => 'Słowa kluczowe',
	'auth' => 'Auth',
	'auth_proxy_enable' => 'Enable Proxy Authentication',
	'auth_proxy_header_email' => 'HTTP Header for E-mail',
	'auth_proxy_header_username' => 'HTTP Header for Username',
	'auth_proxy_sign_up' => 'Automatically register unknown users',
	'auth_proxy_whitelist' => 'Proxy Address Whitelist',
	'auth_proxy_hide_logout' => 'Hide logout button',
	'proxy_auth_settings_saved_successfully' => 'Proxy authentication settings saved successfully',
	'auth_proxy_warning' => 'Warning: Be sure that your workspace instance is protected behind a proxy before enabling this feature',
	'auth_proxy_no_https_detected' => 'Caution: No HTTPS detected. Please ensure that communication to your workspace is protected',
	'location_log' => 'Location Log',
	'location_log_content' => 'Content',
	'location_log_date' => 'Created / Updated',
	'location_log_actions' => 'Actions',
	'add_location_log_entry' => 'Add entry',
	'edit_location_log_entry' => 'Edit entry',
	'confirm_remove_location_log_entry' => 'Do you really want to remove this entry?',
	'no_location_log_entries_yet' => 'No entries yet.',
	'share_api_host' => 'Host to share images on',
	'search_custom' => 'Search in custom attributes',
	'custom_bulk_commands' => 'Custom bulk commands',
	'add_bulk_cmd' => 'Add bulk command',
	'styles' => 'Styles',
	'confirm_remove_bulk_cmd' => 'Do you really want to remove this item?',
	'bulk_cmd_added_successfully' => 'Bulk command was successfully added',
	'bulk_cmd_updated_successfully' => 'Bulk command was successfully updated',
	'bulk_cmd_removed_successfully' => 'Bulk command was successfully removed',
	'plantrec_enable_label' => 'Włącz rozpoznawanie roślin poprzez Pl@ntNet',
	'plantrec_apikey_label' => 'Klucz API Pl@ntNet',
	'save_all' => 'Zapisz wszystko',
	'date_select_today' => 'Użyj dzisiejszej daty',
	'plant_sorting_view_cards' => 'Zobacz jako karty',
	'plant_sorting_view_list' => 'Wyświetl jako listę'
];