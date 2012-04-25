<?php
// CACHE FILE FOR LANGUAGE: pl
// DATE: 2012-04-25 18:16:46
// *** DELETE THIS FILE TO RELOAD DATA FROM TMX FILE ***

$tmx['a_meta_charset']='UTF-8';
$tmx['a_meta_dir']='ltr';
$tmx['a_meta_language']='pl';
$tmx['d_admin_index']='To jest strefa administracyjna <a href="tce_page_info.php" title="o TCExam">TCExam</a>, jest środowiskiem programowym niezależnym od platformy i języka, przeznaczonym do tworzenia, zarządzania i przeprowadzania testów on-line.<br /><br />Z menu znajdującego się po lewej stronie możesz przenieść się do odpowiednich sekcji systemu:<ul><li><strong>użytkownicy</strong><br />Ta sekcja zawiera formularze do <a href="tce_edit_user.php" title="Zarządzanie użtkownikami">insert and manage</a> users, <a href="tce_select_users.php" title="User Selection"> to select them</a> and to show the list of the ones currently <a href="tce_show_online_users.php" title="Online Users">online</a>.<br />Just the registered users granted with a username and a password are entitled to access the public area of the system and perform the tests.<br />It is possible to specify different access levels for both the users and the different components and parts of the system (pages, forms, sections).<br />TCExam utilizes also another security system to prevent unauthorized access based on the check of the IP addresses.</li><li><strong>modules</strong><br />This section contains the forms to insert and modify test <a href="tce_edit_module.php" title="Modules Management">modules</a>, <a href="tce_edit_subject.php" title="Topic Management">topics</a>, the related <a href="tce_edit_question.php" title="Question Management">questions</a> and <a href="tce_edit_answer.php" title="Multiple-Answer Management">answers</a>.<br />You can select an unlimited number of topics that can be used together for a specific test, and for each topic you can define an unlimited number of questions and possible answers. The system will randomly select questions and answers among the available ones.<br />TCExam supports both multiple-answer questions and free-answer questions. The latters will be evaluated through a specific evaluation form <a href="tce_edit_rating.php" title="Answer evaluation"></a>, while the formers will be automatically evaluated.<br />All the descriptions of tests, topics, questions and answers support a particular proprietary code (tcecode) that, by using a specific form, allows the use of images and text formatting.</li><li><strong>test</strong><br />This section includes the form to insert, generate and modify the different <a href="tce_edit_test.php" title="Test Management">tests</a>, the form to <a href="tce_edit_rating.php" title="Answer Evaluation">evaluate</a> the free answers and the forms to show or generate PDF versions of the <a href="tce_show_result_allusers.php" title="Test Results Summary">results</a>, a detailed view of the <a href="tce_show_result_user.php" title="Risultati test">users\' tests</a> and the <a href="tce_show_result_questions.php" title="Question Statistics">statistics</a> of questions and answers utilized.<br />TCExam selects on a random basis the various questions and related available answers so that all tests for the different users will be different from each other.<br />It is also possible to to generate an arbitrary number of tests in PDF format so that they can be printed and utilized for a conventional exam.</li></ul>';
$tmx['d_logout_desc']='kliknij na przycisk aby opościć system';
$tmx['d_tcexam_desc']='TCExam jest oprogramowaniem do zarządzania i przeprowadzania testów on-line.';
$tmx['h_add']='dodaje aktualny rekord do bazy danych';
$tmx['h_add_image']='wstawia wybraną grafike w tekst';
$tmx['h_add_object']='wstawia wybrany obiekt w tekst';
$tmx['h_add_questions']='wstaw wybrany rodzaj pytania';
$tmx['h_add_subject']='wstaw wybrany tytuł';
$tmx['h_add_tag']='wstaw wybraną pozycję';
$tmx['h_allow_no_answer']='jeżeli zaznaczone, pokaże się dodatkowa opcja wyboru -bez odpowiedzi- dla każdego pytania w tescie';
$tmx['h_answer']='możliwe odpowiedzi dla pytania';
$tmx['h_answer_isright']='wybierz tą opcję jeśli podana odpowiedź na pytanie jest ptawidłowa';
$tmx['h_answer_right']='poprawna odpowiedź';
$tmx['h_answer_score']='ilość punktów za pytanie (np.: 0.5, -0.1, ...)';
$tmx['h_answer_selected']='wybrana odpowiedź';
$tmx['h_answer_time']='średni czas na odpowiedź ww gg:mm';
$tmx['h_answer_wrong']='zła odpowiedź';
$tmx['h_answers_right']='poprawne odpowiedzi';
$tmx['h_answers_wrong']='błędne odpowiedzi';
$tmx['h_birth_date']='data urodzin użytkownika';
$tmx['h_birth_place']='miejsce urodzin użytkownika (miasto, województwo, państwo)';
$tmx['h_cancel']='anuluj zmiany lub aktualną operację';
$tmx['h_cancel_window']='zamyka okno i anuluje zmiany';
$tmx['h_clear']='resetuje pola formy';
$tmx['h_close_window']='zamyka okno';
$tmx['h_continue']='kontynuacja testu';
$tmx['h_database']='modyfikacja bazydanych';
$tmx['h_delete']='kasuje aktualny rekord z bazy danych';
$tmx['h_display_all']='wyświetla wszystkie odpowiedzi łącznie z tymi, które zostały już ocenione';
$tmx['h_display_user_info']='wyświetla informacje o użytkowniku, który tak odpowiedział';
$tmx['h_email_all_results']='wysyła e-maile o wynikach testu do wszystkich użytkowników';
$tmx['h_email_result']='wysyła maila z raportem o tescie do użytkowników';
$tmx['h_enable_single_answer']='jeżeli zaznaczone, włącza tryb pojedyńczego wyboru';
$tmx['h_enable_multiple_answers']='jeżeli zaznaczone, włącza tryb wielokrotnego wyboru';
$tmx['h_enable_free_answer']='jeżeli zaznaczone, włącza pole na swobodną odpowiedź';
$tmx['h_enabled']='włącza/wyłącza aktualną pozycję';
$tmx['h_execute']='włącza test';
$tmx['h_file_type']='rodzaj pliku';
$tmx['h_file_type_xml']='eXtensible Markup Language';
$tmx['h_file_type_csv']='Tab Delimited Text File';
$tmx['h_firstname']='imię użytkownika (np.: Michał, Jacek, ...)';
$tmx['h_fiscal_code']='user\'s social security number';
$tmx['h_global_score']='if selected, overwrites the answers points with the points below';
$tmx['h_group_name']='grupa użytkownika';
$tmx['h_guide']='pomoc';
$tmx['h_index']='strona główna';
$tmx['h_info']='o TCExam';
$tmx['h_ip']='Adres IP komputera z którego wysłano dane.';
$tmx['h_ip_range']='list of enabled IP addresses separated by commas (e.g.: 192.168.*.*,127.0.0.*,192.168.234.16-192.168.234.32,::ffff:c0a8:0110-::ffff:c0a8:0140)';
$tmx['h_lastname']='Nazwisko użytkownika(np.: Kowalski, Nowak, ...)';
$tmx['h_level']='poziom uprawnień użytkownika, poziom 0 oznacza anonimowego użytkownika (nie zarejestrowany), poziom 1 oznacza podstawowe prawa, poziom 10 oznacza administratora z pełnym dostępem';
$tmx['h_login_button']='naciśnij tutaj aby się zalogować';
$tmx['h_login_name']='użytkownik, nazwa używana aby zalogować się w systemie';
$tmx['h_logout_link']='naciśnij ten odnośnik aby wyjść (zakończyć sesje)';
$tmx['h_num_answers']='makymalna ilość alternatywnych odpowiedzi dla każdego pytania';
$tmx['h_num_questions']='maksymalna ilość pytań';
$tmx['h_num_tquestions']='maximum number of free-answer questions';
$tmx['h_object_width']='szerokość obiektu [w pikselach]';
$tmx['h_object_height']='wysyokość obiektu [w pikselach]';
$tmx['h_password']='hasło, ciąg znaków który w połączeniu z nazwą użytkownika zapewnia dostęp do tego systemu';
$tmx['h_password_repeat']='powtórzenie hasła w celu sprawdzenia czy nie popełniliśmy pomyłki wpisując hasło';
$tmx['h_pdf']='generuje dokument PDF';
$tmx['h_pdf_all']='generuje dokładny raport dla każdego użytkownika';
$tmx['h_pdf_offline_test']='generuje test w postaci pliku PDF dla wersji off-line';
$tmx['h_preview']='podgląd wprowdzonej informacji';
$tmx['h_question']='pytanie powiązane z wybranym tematem';
$tmx['h_question_answered']='na to pytanie udzielono już odpowiedzi';
$tmx['h_question_not_answered']='na to pytanie nie udzielona jeszcze odpowiedzi';
$tmx['h_question_description']='rodzaj pytania (np.: prawda, fałsz, ...)';
$tmx['h_question_difficulty']='poziom trudności - wielokrotność dla podstawowych punktów';
$tmx['h_question_displayed']='to pytanie zostało już wyświetlone';
$tmx['h_question_not_displayed']='to pytanie nie zostało jeszcze wyświetlone';
$tmx['h_question_recurrence']='powtarzanie się tego pytania w różnych testach';
$tmx['h_question_type']='rodzaj pytania';
$tmx['h_questions_unanswered']='pytania bez odpowiedzi';
$tmx['h_questions_undisplayed']='pytania nie wyświetlone';
$tmx['h_questions_unrated']='questions not rated';
$tmx['h_random_answers']='if selected, extracts randomly the multiple answers related to each question';
$tmx['h_random_questions']='if selected, extracts randomly the answers related to each selected topic';
$tmx['h_regcode']='numer rejestracji użytkownika';
$tmx['h_regdate']='data rejestracji użytkownika';
$tmx['h_result']='pokaż wyniki testu';
$tmx['h_results_to_users']='jeżeli zaznaczone, użytkownicy będą mogli obejrzeć wyniki';
$tmx['h_select_question']='wybierz to pytanie';
$tmx['h_score']='punktów za tą odpowiedź';
$tmx['h_score_average']='średni wynik';
$tmx['h_score_right']='podstawowe punkty dla każdego poziomu trudności pytań';
$tmx['h_score_total']='wynik końcowy';
$tmx['h_score_unanswered']='punkty za brak odpowiedzi (np.: 0, -0.5, ...)';
$tmx['h_score_wrong']='punkty za błędną odpowiedź (np.: 0, -0.1, ...)';
$tmx['h_select_answer']='select the answers to be evaluated';
$tmx['h_select_user']='opens a user selection page';
$tmx['h_subject']='temat testu';
$tmx['h_subject_description']='opis tematu testu';
$tmx['h_subject_name']='name of test topic';
$tmx['h_subjects']='lista dostępnych tematów';
$tmx['h_submit']='sends form data to the calling process';
$tmx['h_tcecode_editor']='editor that allows text formatting by using a simple proprietary code';
$tmx['h_test']='test, egzamin';
$tmx['h_test_description']='opis testu';
$tmx['h_test_name']='nazwa testu';
$tmx['h_test_time']='maksymalny czas trwania testu w minutach';
$tmx['h_time_begin']='data i godzina rozpoczęcia testu  [rrrr-mm-dd gg:mm:ss]';
$tmx['h_time_end']='data i godzina zakończenia testu [rrrr-mm-dd gg:mm:ss]';
$tmx['h_update']='uaktualnia dane';
$tmx['h_upload_image']='ścieżka dostępu do obrazka, który ma zostać wsłany na serwer';
$tmx['h_upload_file']='ścieżka dostępu do pliku';
$tmx['h_user_info']='pokazuje informacje na temat połączonego użytkownika';
$tmx['h_usered_email']='adres e-mail użytkownika (np.: nazwa@example.com)';
$tmx['h_view_details']='pokazuje szczegóły';
$tmx['h_csv_export']='eksportuje dane do CSV (Tab delimited text file)';
$tmx['h_xml_export']='eksportuje dane do XML';
$tmx['hp_edit_answer']='With this form you can manage all possible answers related to the question selected. You can add an arbitrary number of correct and wrong answers for each question; during the test the system will automatically select only one of the correct answers and it will show it in the list of possible answers. You cannot modify or delete an answer that is part of a test already performed, in this case you can just disable it by using the button [delete]. Legend: [+] Enabled; [-] Disabled. Legend for questions: [S] MCSA - Multiple Choice Single Answer question; [M] MCMA - Multiple Choice Multiple Answer question; [T] TEXT - Free Fnswer; [O] ORDER - Ordering Answer. Legend for answers: [T] true answer; [F] false anwser.';
$tmx['hp_edit_group']='Na tej formie możesz zarządzać grupami użytkowników.';
$tmx['hp_edit_question']='With this form you can manage the different questions related to the topic selected. You cannot modify or delete a question that is part of a test already performed, in this case you can just disable it by using the button [delete]. Legend: [+] Enabled; [-] Disabled; [S] MCSA - Multiple Choice Single Answer question; [M] MCMA - Multiple Choice Multiple Answer question; [T] TEXT - Free answer; [O] ORDER - Ordering Answers.';
$tmx['hp_edit_rating']='In this form you can specify the points for the free answers. You can see the user\'s data by selecting the field \'user data\'. The field \'shows all\' enables you to see and correct also the answers already evaluated';
$tmx['hp_edit_subject']='With this form you can manage the different topics of that belongs to a selected module. The questions in the system can be cataloged according to these topics. In a single test there can be several topics. You cannot modify or delete a topic that is a part of a test previously performed, in this case you can just disable it by using the button [delete]. Legend: [+] Enabled; [-] Disabled;';
$tmx['hp_edit_tcecode']='With this form you can add images and formatting to the text';
$tmx['hp_edit_test']='In this form you can insert, modify or delete the tests. In order to insert a test you must have previously defined at least a topic with a certain number of questions and answers. Only users with sufficient rights and a valid IP address can perform the tests. The field IP may contain also a list of the different IP addresses entitled to perform the test, separated by commas. An IP address can also contain wildcards (* = any number). The test will be active just during the specified time frame and, once started, it will have to be completed within the specified maximum time. Tests can contain several topics with different type of questions that will be randomly extracted. You can also specify a basic score for each point of difficulty level of questions. You cannot modify a test that has already performed. When a test is deleted, so they are all its logs (test data). The button [generate] enables to generate an arbitrary number of unique tests in PDF format that can be printed and performed without a computer. The letters and numbers inside the squared parenthesis on topics are quick statistics for questions: [ (number of questions)(question type S,M,T,O)(difficulty):(min answers)-(max answers) ].';
$tmx['hp_edit_user']='In this form you can manage the different users allowed to access the system. For each user you can choose a name, a password and an access level. Level 0 indicates an anonymous user (not registered), level 1 a basic user (e.g.: a student), level 10 an administrator with full access rights';
$tmx['hp_email_result']='Send results to users by email';
$tmx['hp_import_xml_questions']='With this form you can import questions from an XML file.';
$tmx['hp_import_xml_users']='With this form you can import users and groups from XML or CSV (tab delimited text) file. The file formats are the same as the ones obtained by exporting data from Users Selection form.';
$tmx['hp_login']='Aby dostać się odpowiedniej sekcji TCExam musisz zalogować się używając nazwy i hasła podanego przez administratora';
$tmx['hp_online_users']='This form shows the users currently logged';
$tmx['hp_public_index']='To jest główna strona TCExam. Z taj strony możesz rozpocząć lub kontynuować twoje testy';
$tmx['hp_result_questions']='This page shows statistical data for a selected test. By clicking on the name of certain columns you can change the visualization order of the table. By clicking on the line number you can access the modification page for the question selected.';
$tmx['hp_result_user']='This page shows the details of the test for the user selected. The data in each line are: <br />   question number. [score] (user IP | visualization time in hh:mm:ss| time of last modification in hh:mm:ss| time to answer in mm:ss) <br />The symbol ® indicates a question correctly answered, while the answers chosen by the user are indicated by an \'x\'. The button [PDF] outputs the results in a PDF document.';
$tmx['hp_select_all_questions']='In this form you can see and select all the questions and relative answers for a specific topic.';
$tmx['hp_select_users']='In this form you can see and select the registered users. You can change the visualization order clicking on the column names.';
$tmx['hp_sending_in_progress']='Email sending in progress. Please wait while the sending process completes.';
$tmx['hp_test_execute']='This page allows to perform the selected test.';
$tmx['hp_test_info']='Shows informations for the selected test.';
$tmx['hp_test_results']='This page shows the results of the selected test. The results are related just to the questions with multiple answers.';
$tmx['m_authorization_denied']='AUTORYZACJA ODRZUCONA!!!';
$tmx['m_databasempty']='baza danych jest pusta!';
$tmx['m_delete_anonymous']='użytkownik anonymous nie może być usunięty';
$tmx['m_delete_confirm']='potwierdź usunięcie';
$tmx['m_delete_confirm_test']='usunięcie tego testu spowoduje również usunięcie wszystkich jego danych (wyniki testów)';
$tmx['m_delete_prohibited']='ta pozycja nie może zostać usunięta';
$tmx['m_deleted']='pozycja usunięta z bazy danych';
$tmx['m_different_passwords']='podane hasła są różne';
$tmx['m_empty_password']='pole hasło jest puste';
$tmx['m_disabled_vs_deleted']='pozycja została wyłączona, nie mogła zostać skasowana ponieważ jest używana. Jeżeli chcesz usunąc, to musisz usunąć wszystkie testy w których została użyta.';
$tmx['m_duplicate_answer']='ta odpowiedz została już wprowadzona';
$tmx['m_duplicate_name']='nazwa uzytkownika już istnieje, proszę wybrać inną';
$tmx['m_duplicate_regnumber']='numer rejestracyjny jest już używany, proszę użyć innego';
$tmx['m_duplicate_ssn']='this SSN has been already used, you must use another one';
$tmx['m_duplicate_question']='to pytanie zostało już wprowadzone';
$tmx['m_exam_end_time']='Niestety, upłynął czas przeznaczony na rozwiązanie tego testu!';
$tmx['m_form_missing_fields']='niektóre wymagane pola nie zostały wypełnione';
$tmx['m_form_wrong_fields']='niektóre pola zostały wypełnone nieprawidłowymi danymi';
$tmx['m_group_deleted']='grupa została usunięta';
$tmx['m_group_updated']='zaktualizowano';
$tmx['m_importing_complete']='importowanie XML zakończone';
$tmx['m_login_wrong']='zła nazwa użytkownika / hasło';
$tmx['m_mailerror_authenticate']='[SMTP] nie mogę się autentykować.';
$tmx['m_mailerror_connect_host']='[SMTP] nie mogę się połączyć z serwerem SMTP.';
$tmx['m_mailerror_data_not_accepted']='[SMTP] Dane nie zaakceptowane.';
$tmx['m_mailerror_encoding']='Nieznane kodowanie:';
$tmx['m_mailerror_execute']='Nie mogę wykonać:';
$tmx['m_mailerror_file_access']='Nie mam dostępu do pliku:';
$tmx['m_mailerror_file_open']='Nie mogę otworzyć pliku:';
$tmx['m_mailerror_from_failed']='The following From addresses failed:';
$tmx['m_mailerror_instantiate']='Could not instantiate mail function.';
$tmx['m_mailerror_mailer_not_supported']='Mailer is not supported.';
$tmx['m_mailerror_provide_address']='You must provide at least one recipient email address.';
$tmx['m_mailerror_recipients_failed']='[SMTP] The following recipients failed:';
$tmx['m_mailerror_signing']='Signing Error: ';
$tmx['m_mailerror_smtp_error']='SMTP server error: ';
$tmx['m_mailerror_empty_message']='Message body empty';
$tmx['m_mailerror_invalid_address']='Invalid address';
$tmx['m_mailerror_variable_set']='Cannot set or reset variable: ';
$tmx['m_new_window_link']='ten link otwiera nowe okno przeglądarki';
$tmx['m_no_test_available']='aktualnie nie ma żadnych aktywnych testów!';
$tmx['m_process_completed']='proces zakończony';
$tmx['m_search_void']='nic nie znaleziono';
$tmx['m_unanswered']='brak odpowiedzi';
$tmx['m_unknown_email']='nieznany email';
$tmx['m_update_restrict']='pozycja nie może zostać zaktualizowana ponieważ jest używana.';
$tmx['m_updated']='pozycja została zaktualizowana';
$tmx['m_upload_not']='nie mogę wysłać pliku';
$tmx['m_upload_yes']='plik wysłany';
$tmx['m_used_not_update']='the record cannot be updated because is in use in the results table of the test. It will be possible to modify this record only after deleting the test that is using it. You can disable it with the button [delete].';
$tmx['m_used_not_update_test']='the record cannot be updated because is in use in the results table of the test.';
$tmx['m_user_deleted']='użytkownik został usunięty';
$tmx['m_user_updated']='dane użytkownika zostały zaktualizowane';
$tmx['t_answers_editor']='Zarządzanie odpowiedziami';
$tmx['t_email_result']='Wyśli wyniki';
$tmx['t_error']='BŁĄD';
$tmx['t_group_editor']='Zarządzanie grupami';
$tmx['t_group_select']='Wybierz listę';
$tmx['t_help']='Pomoc';
$tmx['t_image_upload']='Dadaj Obrazek';
$tmx['t_login_form']='Autoryzacja';
$tmx['t_main']='TCExam';
$tmx['t_message']='Wiadomość';
$tmx['t_online_users']='Użytkownicy on-line';
$tmx['t_page_guide']='TCExam :: Pomoc';
$tmx['t_page_info']='O TCExam';
$tmx['t_public_index']='TCExam :: Rozpoczęcie testu';
$tmx['t_questions_editor']='Zarządzanie pytaniami';
$tmx['t_questions_list']='Lista pytań';
$tmx['t_question_importer']='Importuj Pytania';
$tmx['t_rating_editor']='Answer Evaluation';
$tmx['t_result_all_users']='Podsumowanie wyników testu';
$tmx['t_result_questions']='Statystyka Pytań';
$tmx['t_result_user']='Wyniki Testu';
$tmx['t_subjects_editor']='Zarządzanie Tematami';
$tmx['t_tcecode_editor']='Formatowanie tekstu';
$tmx['t_test_execute']='Test Execution';
$tmx['t_test_info']='Informacje o teście';
$tmx['t_test_results']='Wyniki testów';
$tmx['t_tests_editor']='Zarządzanie testem';
$tmx['t_third_parties']='Oprogramowanie firm trzecich';
$tmx['t_user_editor']='Zarządzanie Użytkownikami';
$tmx['t_user_importer']='Importowanie użytkowników';
$tmx['t_user_select']='Wybór użytkowników';
$tmx['t_warning']='UWAGA';
$tmx['w_add']='Dodaj';
$tmx['w_add_questions']='dodaj pytania';
$tmx['w_add_subject']='dadaj temeat';
$tmx['w_allow_no_answer']='brak odpowiedzi';
$tmx['w_anonymous']='anonymous';
$tmx['w_answer']='odpowiedź';
$tmx['w_answer_time']='czas';
$tmx['w_answers']='odpowiedzi';
$tmx['w_answers_right']='poprawne';
$tmx['w_answers_right_th']='poprawne';
$tmx['w_answers_wrong']='złe';
$tmx['w_answers_wrong_th']='złe';
$tmx['w_ascent']='wzrost';
$tmx['w_attachment']='załącznik';
$tmx['w_author']='autor';
$tmx['w_birth_date']='data urodzenia';
$tmx['w_birth_place']='miejsce urodzenia';
$tmx['w_cancel']='anuluj';
$tmx['w_city']='miasto';
$tmx['w_clear']='wyczyść';
$tmx['w_clock_timer']='zegar / timer';
$tmx['w_close']='zamknij';
$tmx['w_code']='kod';
$tmx['w_confirm']='potwierdź';
$tmx['w_continue']='kontynuacja';
$tmx['w_country']='państwo';
$tmx['w_database']='baza danych';
$tmx['w_date_format']='[rrrr-mm-dd]';
$tmx['w_datetime_format']='[rrrr-mm-dd gg:mm:ss]';
$tmx['w_delete']='kasuj';
$tmx['w_descent']='spadek';
$tmx['w_description']='opis';
$tmx['w_disabled']='wyłączony';
$tmx['w_display_all']='wyświetl wszystko';
$tmx['w_display_user_info']='dane użytkownika';
$tmx['w_edit']='modyfikuj';
$tmx['w_email']='email';
$tmx['w_email_all_results']='wyślij maile';
$tmx['w_email_result']='wyślij maila';
$tmx['w_group']='grupa';
$tmx['w_groups']='grupy';
$tmx['w_group_select']='list of groups';
$tmx['w_single_answer']='pojedyńczego wyboru';
$tmx['w_multiple_answers']='wielokrotnego wyboru';
$tmx['w_free_answer']='dowolna odpowiedź';
$tmx['w_enabled']='włączony';
$tmx['w_end']='koniec';
$tmx['w_execute']='wykonaj';
$tmx['w_filter']='filtr';
$tmx['w_firstname']='imię';
$tmx['w_fiscal_code']='social security number';
$tmx['w_generate']='generuj';
$tmx['w_global_score']='ogólny wynik';
$tmx['w_guide']='instrukcja';
$tmx['w_height']='wysokość';
$tmx['w_help']='pomoc';
$tmx['w_image']='obrazek';
$tmx['w_index']='index';
$tmx['w_import']='importuj';
$tmx['w_info']='informacje';
$tmx['w_ip']='IP';
$tmx['w_ip_range']='autoryzowane IP';
$tmx['w_jump_menu']='przejdź do menu nawigacji';
$tmx['w_jump_timer']='przejdź do zegara/timer';
$tmx['w_jump_questions']='przejdź do listy pytań';
$tmx['w_lastname']='nazwisko';
$tmx['w_level']='poziom';
$tmx['w_levels']='poziomy';
$tmx['w_license']='licencja';
$tmx['w_list']='lista';
$tmx['w_login']='autentykacja';
$tmx['w_logout']='wylogowanie';
$tmx['w_main']='główna';
$tmx['w_max_score']='max wynik';
$tmx['w_minutes']='min';
$tmx['w_modify']='zmień';
$tmx['w_name']='tytuł';
$tmx['w_name_first']='imię';
$tmx['w_name_last']='nazwisko';
$tmx['w_next']='następne';
$tmx['w_notes']='notatki';
$tmx['w_num_answers']='ilość odpowiedzi';
$tmx['w_num_questions']='ilość pytań';
$tmx['w_num_tquestions']='ilość wolnych odpowiedzi';
$tmx['w_number_of_records']='ilość rekordów';
$tmx['w_object']='obiekt';
$tmx['w_online']='online';
$tmx['w_page']='strona';
$tmx['w_password']='hasło';
$tmx['w_pdf']='PDF';
$tmx['w_pdf_all']='PDF tests';
$tmx['w_pdf_offline_test']='PDF offline test';
$tmx['w_place']='place';
$tmx['w_postal_code']='zip';
$tmx['w_preview']='podgląd';
$tmx['w_previous']='poprzednie';
$tmx['w_print']='drukuj';
$tmx['w_province']='województwo';
$tmx['w_question']='pytanie';
$tmx['w_question_difficulty']='trudność';
$tmx['w_questions']='pytania';
$tmx['w_questions_available']='dostępne pytania';
$tmx['w_questions_unanswered']='bez odpowiedzi';
$tmx['w_questions_unanswered_th']='bezodp.';
$tmx['w_questions_undisplayed']='nie wyświetlone';
$tmx['w_questions_undisplayed_th']='nie wys.';
$tmx['w_questions_unrated']='nie ocenione';
$tmx['w_questions_unrated_th']='nie oce';
$tmx['w_quote']='quote';
$tmx['w_random_answers']='losowe odpowiedzi';
$tmx['w_random_questions']='losowe pytania';
$tmx['w_rating']='evaluation';
$tmx['w_record_status']='podsumowanie pozycji';
$tmx['w_recurrence']='powtarzanie';
$tmx['w_regcode']='numer rejestracji';
$tmx['w_regdate']='data rejestracji';
$tmx['w_reload']='przeładuj';
$tmx['w_result']='wynik';
$tmx['w_results']='wyniki';
$tmx['w_results_to_users']='wyniki do użytkowników';
$tmx['w_right']='poprawnych';
$tmx['w_skip_navigation']='bez menu nawigacji';
$tmx['w_score']='punktów';
$tmx['w_score_average']='średnio';
$tmx['w_score_right']='basic points';
$tmx['w_score_unanswered']='points for no answer';
$tmx['w_score_wrong']='points for wrong answer';
$tmx['w_search']='szukaj';
$tmx['w_select']='wybierz';
$tmx['w_selection']='zaznaczenie';
$tmx['w_show']='shows';
$tmx['w_start']='start';
$tmx['w_stats']='statystyki';
$tmx['w_street']='adres';
$tmx['w_subject']='temat';
$tmx['w_subjects']='tematy';
$tmx['w_submit']='wyślij';
$tmx['w_teacher']='nauczyciel';
$tmx['w_test']='test';
$tmx['w_test_time']='czas testu';
$tmx['w_tests']='testy';
$tmx['w_tests_available']='dostepne testy';
$tmx['w_text']='tekst';
$tmx['w_time']='czas';
$tmx['w_time_begin']='czas rozpoczęcia';
$tmx['w_time_end']='czas zakończenia';
$tmx['w_time_hhmmss']='gg:mm:ss';
$tmx['w_time_mmss']='mm:ss';
$tmx['w_timestamp']='timestamp';
$tmx['w_type']='rodzaj';
$tmx['w_update']='aktualizuj';
$tmx['w_updated_at']='updated to';
$tmx['w_upload']='wyślij';
$tmx['w_upload_file']='upload file';
$tmx['w_user']='użytkownik';
$tmx['w_username']='nazwa użytkownika';
$tmx['w_users']='użytkownicy';
$tmx['w_weight']='waga';
$tmx['w_width']='szerokość';
$tmx['w_no']='nie';
$tmx['w_xml']='XML';
$tmx['w_yes']='tak';
$tmx['w_undo']='cofnij';
$tmx['w_redo']='ponów';
$tmx['h_undo']='cofnij ostatnią akcję';
$tmx['h_redo']='ponów ostatnią akcję';
$tmx['h_submit_file']='submit file';
$tmx['w_questions_for']='questions for';
$tmx['m_unavailable_questions']='wybrane pytania nie są dostępne w bazie danych';
$tmx['w_status']='status';
$tmx['w_lock']='blokuj';
$tmx['w_unlock']='odblokuj';
$tmx['w_locked']='zablokowane';
$tmx['w_unlocked']='odlokowane';
$tmx['h_add_five_minutes']='dodaj pięć minut';
$tmx['w_terminate']='zakończ';
$tmx['w_terminate_exam']='zakończ egzamin';
$tmx['m_confirm_test_termination']='potwierdz zakonczenie testu';
$tmx['w_comment']='komentarz';
$tmx['h_testcomment']='komentarz do testu';
$tmx['t_translations']='Tłumaczenia';
$tmx['w_position']='pozycja';
$tmx['w_ordering_answer']='kolejność w odpowedzi';
$tmx['h_enable_ordering_answer']='jeżeli wybrany, włącza tryb poprawnej kolejności';
$tmx['t_user_registration']='Rejestracja Nowego Użytkownika';
$tmx['hp_user_registration']='Tutaj możesz stworzyć nowe konto użytkownika.';
$tmx['w_user_registration_link']='Nie masz nazwy użytkownika? Załóż konto.';
$tmx['m_user_verification_sent']='wiadomość weryfikująca została wysłana na ten adres';
$tmx['m_user_registration_ok']='Rejestracja użytkownika zakończyła się sukcesem';
$tmx['w_i_agree']='Oświadczam, że rozumiem zasady';
$tmx['w_registration_verification']='Weryfikacja Rejestracji';
$tmx['m_email_registration']='<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl" dir="ltr"><body><p>To jest automatyczna odpowedź wysłana aby zweryfikować <a href="#TCEXAMURL#">TCExam</a> Żądanie Rejestracji Nowego Użytkownika.<br />Request verification for email #EMAIL# submitted by remote IP #USERIP#.<br />If this message has been sent in error, please disregard.<br /><br /><b>TO CONFIRM THE REGISTRATION USE THE FOLLOWING LINK:<br /><a href="#SUBSCRIBEURL#">#SUBSCRIBEURL#</a></b></p></body></html>';
$tmx['w_timer']='czas [sec]';
$tmx['h_question_timer']='maksymalna ilość sekund jaką będzie wyświetlone to pytanie (0 = wyłącza timer)';
$tmx['w_fullscreen']='pełen ekran';
$tmx['h_question_fullscreen']='włącz/wyłącz tryb pełnego ekranu dla tego pytania';
$tmx['h_position']='poprawna kolejność wizualizacji';
$tmx['w_order']='kolejność';
$tmx['w_test_score_threshold']='punktów by zaliczyć egzamin';
$tmx['h_test_score_threshold']='minimalna wymagana ilość punktów abyb zaliczyć egzamin';
$tmx['w_mcma_radio']='radiobuttons for MCMA';
$tmx['h_mcma_radio']='if selected, uses radiouttons instead of checkboxes for MCMA questions';
$tmx['w_enable_noanswer']='opcja \'brak odpowiedzi\'';
$tmx['h_enable_noanswer']='jeśli wybrano, włączy się \'brak odpowiedzi\' jako dodatkowa opcja przy pytaniu';
$tmx['w_enable_menu']='menu pytań';
$tmx['h_enable_menu']='if selected, enables the questions navigation menu';
$tmx['w_enable_comment']='komentarz testu';
$tmx['h_enable_comment']='if selected, enables a text field to leave a general comment about the test.';
$tmx['w_report_to_users']='raporty do użytkowników';
$tmx['h_report_to_users']='if selected, enable users to view a detailed test report';
$tmx['w_passed']='ZALICZONY';
$tmx['w_not_passed']='NIE ZALICZONY';
$tmx['w_inline_answers']='odpowiedzi w linie';
$tmx['h_question_inline_answers']='if selected, display answers one next each other.';
$tmx['w_auto_next']='automatycznie następny';
$tmx['h_question_auto_next']='if selected, moves automatically to next question when an answer of MCSA question is selected.';
$tmx['w_keyboard_key']='selection key';
$tmx['h_answer_keyboard_key']='optional keyboard key used to select this answer';
$tmx['w_reaction']='reakcja';
$tmx['w_true']='prawda';
$tmx['w_false']='fałsz';
$tmx['w_true_acronym']='P';
$tmx['w_false_acronym']='F';
$tmx['w_unanswered_acronym']='B';
$tmx['w_required']='wymagane';
$tmx['w_not_required']='nie wymagane';
$tmx['w_details']='szczegóły';
$tmx['w_hide_answers']='ukryj odpowiedzi';
$tmx['w_enable']='włączone';
$tmx['w_disable']='wyłączone';
$tmx['w_copy']='kopiuj';
$tmx['w_move']='przenieś';
$tmx['w_from']='z';
$tmx['w_to']='do';
$tmx['w_check_all']='zaznacz wszystko';
$tmx['w_uncheck_all']='odznacz wszystkow';
$tmx['m_with_selected']='z wybranym:';
$tmx['w_module']='moduł';
$tmx['w_modules']='moduły';
$tmx['t_modules_editor']='Zarządzanie Modułami';
$tmx['hp_edit_module']='With this form you can manage the different modules. The topics in the system can be cataloged according to these modules. In a single test there can be several modules. You cannot modify or delete a module that is a part of a test previously performed, in this case you can just disable it by using the button [delete]. Legend: [+] Enabled; [-] Disabled;';
$tmx['w_all']='wszystko';
$tmx['w_number']='numer';
$tmx['w_minimum']='minimum';
$tmx['w_maximum']='maximum';
$tmx['w_sum']='suma';
$tmx['w_sumsq']='square sum';
$tmx['w_mean']='mean';
$tmx['w_median']='mediana';
$tmx['w_mode']='mode';
$tmx['w_range']='range';
$tmx['w_variance']='wariacja';
$tmx['w_standard_deviation']='standard deviation';
$tmx['w_statistics']='statystki';
$tmx['w_skewness']='skewness';
$tmx['w_kurtosi']='kurtosi';
$tmx['t_all_results_user']='Wyniki Użytkowników';
$tmx['hp_allresults_user']='Ta forma przestawia wyniki wybranego użytkownika.';
$tmx['hp_result_alluser']='Ta forma przestawia sumaryczne wyniki wszystkich użtkowników dla wybranego testu.';
$tmx['h_module_name']='name of the module';
$tmx['w_explanation']='explanation';
$tmx['h_explanation']='explanation to be printed on results';
$tmx['w_repeatable']='repeatable';
$tmx['h_repeatable_test']='users can repeat this test several times';
$tmx['w_repeat']='repeat';
$tmx['h_repeat_test']='repeat this test (current results will be deleted)';
$tmx['w_calendar']='calendar';
$tmx['m_score_higher_than_max']='the selected score is higher than maximum allowed';
$tmx['w_mcma_partial_score']='partial score for MCMA';
$tmx['h_mcma_partial_score']='if selected, uses partial score for MCMA questions';
$tmx['h_logout_on_timeout']='if selected, logs out the user when the time expires';
$tmx['w_logout_on_timeout']='logout when time expires';
$tmx['t_backup_editor']='Database Backup and Restore';
$tmx['w_backup']='backup';
$tmx['w_restore']='restore';
$tmx['w_backup_file']='backup file';
$tmx['h_backup']='create a new backup';
$tmx['h_restore']='restore the selected backup';
$tmx['m_backup_completed']='backup has been successfully created';
$tmx['m_restore_completed']='restore has been successfully created';
$tmx['m_restore_confirm']='confirm restoring';
$tmx['hp_edit_backups']='This page allows you to make and restore database backups (works only on POSIX systems with MySQL or PostgreSQL).
Push the [backup] button to create a new TCExam database dump in compressed SQL format (structure and data).
To restore an existing backup archive, select it and push the [restore] button.
Note that before each restore the system automatically execute a new backup, so you can undo the operation.
Backup files are stored on the "cache/backup" folder using the following syntax: YYYYMMDDhhmmss_tcexam_backup.sql.gz , where YYYYMMDDhhmmss are the digits of year (Y), month (M), day (D), hour (h), minutes (m), seconds (s).';
$tmx['w_download']='download';
$tmx['h_download']='download the selected backup file';
$tmx['t_user_change_password']='Change Password';
$tmx['t_user_change_email']='Change Email';
$tmx['hp_user_change_password']='With this form you can change your access password.';
$tmx['hp_user_change_email']='With this form you can change your email. A verification message will be sent to your new email address. Your account will be disabled until confirmation receipt.';
$tmx['m_password_updated']='the password has been updated';
$tmx['m_email_updated']='the email has been updated';
$tmx['m_different_emails']='the emails are different';
$tmx['w_current_password']='current password';
$tmx['w_new_password']='new password';
$tmx['d_password_lenght']='at least 8 alphanumeric characters';
$tmx['w_new_email']='new email';
$tmx['h_email']='e-mail address';
$tmx['h_login_link']='click on this link to access on this system';
$tmx['w_change_email']='change email';
$tmx['w_change_password']='change password';
$tmx['w_admin']='admin';
$tmx['h_admin_link']='administration area';
$tmx['h_public_link']='public area';
$tmx['w_public']='public';
$tmx['t_test_list']='Test List';
$tmx['w_action']='action';
$tmx['w_show']='show';
$tmx['w_hide']='hide';
$tmx['w_change_dir']='change directory';
$tmx['w_size']='size';
$tmx['w_date']='date';
$tmx['w_permissions']='permissions';
$tmx['t_filemanager']='Media File Manager';
$tmx['hp_filemanager']='With this form you can manage multimedia files.';
$tmx['m_used_file']='this file is used on question or answer description';
$tmx['m_delete_file_error']='unable to delete the selected file or directory';
$tmx['w_rename']='rename';
$tmx['m_file_renamed']='the file has been renamed';
$tmx['m_file_rename_error']='unable to rename the selected file';
$tmx['m_file_already_exist']='this file or directory name is already used';
$tmx['w_file_manager']='file manager';
$tmx['w_new_directory']='new directory';
$tmx['w_create_directory']='create';
$tmx['m_directory_created']='the directory has been created';
$tmx['m_directory_create_error']='unable to create the requested directory';
$tmx['w_directory']='directory';
$tmx['w_table']='table';
$tmx['w_visual']='visual';
$tmx['t_select_media_file']='Select Object';
$tmx['hp_select_media_file']='This page allows you to insert a multimedia file object in the current description. Select the object you want to insert, fill description fields and click the [add] button.';
$tmx['w_owner']='owner';
$tmx['h_module_owner']='owner of this module';
$tmx['h_topic_owner']='owner of this topic';
$tmx['t_omr_answers_importer']='Import Answers (OMR)';
$tmx['hp_omr_answers_importer']='With this form you can import user\'s answers from scanned images of answer sheets. The images will be processed using Optical Mark Recognition (OMR) system to identify test data and user\'s answers. Imported data will overwrite existing results. The OMR sheets must be fully scanned with full color range at 200DPI or more.';
$tmx['w_import_omr_answers']='import answers';
$tmx['w_omr_data_page']='OMR DATA';
$tmx['w_omr_answer_sheet']='OMR ANSWER SHEET';
$tmx['h_omr_data_page']='scanned image of the page labeled OMR DATA';
$tmx['m_omr_wrong_test_data']='the image of OMR DATA page is missing or unreadable';
$tmx['m_omr_wrong_answer_sheet']='the image of OMR ANSWER SHEET page is missing or unreadable';
$tmx['m_import_ok']='the import process has been successfully completed';
$tmx['m_import_error']='the import process has failed';
$tmx['w_forgot_password']='I forgot my password';
$tmx['h_reset_password']='reset the password';
$tmx['d_reset_password']='Please enter the email address you used to create your account, and we will send you a link to reset your password.';
$tmx['t_password_assistance']='Password Assistance';
$tmx['w_unknown_email']='unknown email';
$tmx['w_result_graph']='graph of points and correct answers percentage for each listed test';

// --- EOF ---