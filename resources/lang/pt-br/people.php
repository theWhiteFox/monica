<?php

return [

    //index
    'people_list_number_kids' => '{0} 0 crianças|{1,1} 1 criança|{2,*} :count crianças',
    'people_list_last_updated' => 'Last consulted:',
    'people_list_number_reminders' => '{0} 0 lembretes|{1,1} 1 lembrete|{2, *} :count lembretes',
    'people_list_blank_title' => 'Você ainda não tem ninguém em sua conta',
    'people_list_blank_cta' => 'Adicionar uma pessoa',
    'people_list_search' => 'Pesquisar pessoa por nome',
    'people_list_firstnameAZ' => 'Classificar por primeiro nome A → Z',
    'people_list_firstnameZA' => 'Classificar por primeiro nome Z → A',
    'people_list_lastnameAZ' => 'Classificar por sobrenome A → Z',
    'people_list_lastnameZA' => 'Classificar por sobrenome Z → A',

    // people add
    'people_add_title' => 'Adicione uma nova pessoa',
    'people_add_firstname' => 'Primeiro nome',
    'people_add_middlename' => 'Nome do meio (Opcional)',
    'people_add_lastname' => 'Sobrenome (Opcional)',
    'people_add_cta' => 'Adicionar essa pessoa',
    'people_add_gender' => 'Gênero',
    'people_delete_success' => 'O contato foi excluído',
    'people_delete_message' => 'Se você precisar excluir este contato,',
    'people_delete_click_here' => 'clique aqui',
    'people_delete_confirmation' => 'Você tem certeza de que deseja excluir esse contato? A exclusão é permanente.',

    // show
    'section_personal_information' => 'Informação pessoal',
    'section_personal_activities' => 'Atividades',
    'section_personal_reminders' => 'Lembretes',
    'section_personal_tasks' => 'Tarefas',
    'section_personal_gifts' => 'Presentes',

    //
    'link_to_list' => 'Lista de pessoas',

    // Header
    'edit_contact_information' => 'Editar informação do contato',

    // age - birthday
    'birthdate_not_set' => 'A data de nascimento não está definida',
    'age_approximate_in_years' => 'por volta de :age anos de idade',
    'age_exact_in_years' => ':age anos de idade',
    'age_exact_birthdate' => 'nascido :date',

    // Last called
    'last_called' => 'Última chamada: :date',
    'last_called_empty' => 'Última chamada: desconhecido',
    'last_activity_date' => 'Última atividade junto: :date',
    'last_activity_date_empty' => 'Última atividade junto: desconhecido',

    // additional information
    'information_edit_success' => 'O perfil foi atualizado com sucesso',
    'information_edit_title' => 'Editar informações pessoais para :name',
    'information_edit_avatar' => 'Photo/avatar of the contact',
    'information_edit_max_size' => 'Max :size Mb.',
    'information_edit_firstname' => 'Primeiro nome',
    'information_edit_lastname' => 'Sobrenome (Opcional)',
    'information_edit_facebook' => 'Facebook profile (optional)',
    'information_edit_twitter' => 'Twitter profile (optional)',
    'information_edit_linkedin' => 'LinkedIn profile (optional)',
    'information_edit_street' => 'Rua (Opcional)',
    'information_edit_province' => 'Estado (Opcional)',
    'information_edit_postalcode' => 'CEP (Opcional)',
    'information_edit_city' => 'Cidade (Opcional)',
    'information_edit_country' => 'País (Opcional)',
    'information_edit_email' => 'Endereço de Email  (Opcional)',
    'information_edit_phone' => 'Número de telefone (Opcional)',
    'information_edit_probably' => 'Esta pessoa é provavelmente',
    'information_edit_probably_yo' => 'anos de idade',
    'information_edit_exact' => 'Conheço a data de nascimento exata dessa pessoa, que é',
    'information_edit_help' => 'Se você indicar uma data de nascimento exata para essa pessoa, criaremos um novo lembrete para você - então você será notificado todos os anos quando é hora de celebrar a data de nascimento desta pessoa.',
    'information_no_address_defined' => 'Nenhum endereço definido',
    'information_no_email_defined' => 'Nenhum email definido',
    'information_no_phone_defined' => 'Nenhum número de telefone definido',
    'information_no_facebook_defined' => 'No Facebook defined',
    'information_no_twitter_defined' => 'No Twitter defined',
    'information_no_linkedin_defined' => 'No LinkedIn defined',
    'information_no_work_defined' => 'No work information defined',
    'information_work_at' => 'at :company',
    'work_add_cta' => 'Update work information',
    'work_edit_success' => 'Work information have been updated with success',
    'work_edit_title' => 'Update :name\'s job information',
    'work_edit_job' => 'Job title (optional)',
    'work_edit_company' => 'Company (optional)',

    // food preferencies
    'food_preferencies_add_success' => 'As preferências de alimentos foram salvas',
    'food_preferencies_edit_description' => 'Talvez :firstname ou alguém na família de :family tenha uma alergia. Ou não gosta de uma garrafa específica de vinho. Indique-os aqui para que você lembre-se da próxima vez que você os convide para o jantar',
    'food_preferencies_edit_description_no_last_name' => 'Talvez :firstname tenha uma alergia. Ou não gosta de uma garrafa específica de vinho. Indique-os aqui para que você lembre-se da próxima vez que você os convide para o jantar',
    'food_preferencies_edit_title' => 'Indique preferências de alimentos',
    'food_preferencies_edit_cta' => 'Guardar preferências de alimentos',
    'food_preferencies_title' => 'Preferências alimentares',
    'food_preferencies_cta' => 'Adicione preferências de alimentos',

    // reminders
    'reminders_blank_title' => 'Há algo sobre o qual você quer se lembrar :name?',
    'reminders_blank_add_activity' => 'Adicionar um lembrete',
    'reminders_add_title' => 'Sobre o que você gostaria de lembrar sobre :name?',
    'reminders_add_description' => 'Lembre-me de...',
    'reminders_add_predefined' => 'Lembrete pré-definido',
    'reminders_add_custom' => 'Lembrete personalizado',
    'reminders_add_next_time' => 'Quando é a próxima vez que você gostaria de ser lembrado sobre isso?',
    'reminders_add_once' => 'Lembre-me sobre isso apenas uma vez',
    'reminders_add_recurrent' => 'Lembre-me sobre isso a todo momento',
    'reminders_add_starting_from' => 'começar a partir da data especificada acima',
    'reminders_add_cta' => 'Adicionar lembrete',
    'reminders_add_error_custom_text' => 'Você precisa indicar um texto para esse lembrete',
    'reminders_create_success' => 'O lembrete foi adicionado com sucesso',
    'reminders_delete_success' => 'O lembrete foi excluído com sucesso',

    'reminder_frequency_week' => 'toda semana|cada :number semanas',
    'reminder_frequency_month' => 'todo month|cada :number mêses',
    'reminder_frequency_year' => 'todo year|cada :number anos',
    'reminder_frequency_one_time' => 'em :date',
    'reminders_delete_confirmation' => 'em certeza de que deseja excluir esse lembrete?',
    'reminders_delete_cta' => 'Deletar',
    'reminders_next_expected_date' => 'em',
    'reminders_cta' => 'Adicionar um lembrete',
    'reminders_description' => 'Nós enviaremos um e-mail para cada uma dos lembretes abaixo. Lembretes são enviados todas as manhãs dos dias em que os eventos acontecerão',
    'reminders_frequency' => 'cada',
    'reminders_date' => 'Date',
    'reminders_content' => 'Content',
    'reminders_actions' => 'Actions',
    'reminders_one_time' => 'One time',
    'reminders_type_week' => 'semana',
    'reminders_type_month' => 'mês',
    'reminders_type_year' => 'ano',

    // significant other
    'significant_other_sidebar_title' => 'Pessoas importantes',
    'significant_other_cta' => 'Adicionar pessoa importante',
    'significant_other_add_title' => 'Quem é importante para :name?',
    'significant_other_add_firstname' => 'Nome',
    'significant_other_add_unknown' => 'Eu não sei a idade dessa pessoa',
    'significant_other_add_probably' => 'Esta pessoa é provavelmente',
    'significant_other_add_probably_yo' => 'anos de idade',
    'significant_other_add_exact' => 'Conheço a data de nascimento exata dessa pessoa, que é',
    'significant_other_add_help' => 'Se você indicar uma data de nascimento exata para esta pessoa, criaremos um novo lembrete para você - então você será notificado todos os anos quando é hora de celebrar esta data de nascimento.',
    'significant_other_add_cta' => 'Adicionar pessoa importante',
    'significant_other_edit_cta' => 'Editar pessoa importante',
    'significant_other_delete_confirmation' => 'Tem certeza de que deseja excluir essa pessoa importante? A exclusão é permanente',
    'significant_other_add_success' => 'Pessoa importante adicionada com sucesso',
    'significant_other_edit_success' => 'Pessoa importante atualizada com sucesso',
    'significant_other_delete_success' => 'Pessoa importante excluída com sucesso',
    'significant_other_add_birthday_reminder' => 'Deseje um feliz aniversário para :name, pessoa importante de :contact_firstname',

    // kids
    'kids_sidebar_title' => 'Crianças',
    'kids_sidebar_cta' => 'Adicionar outra criança',
    'kids_blank_cta' => 'Adicionar uma criança',
    'kids_add_title' => 'Adicionar uma criança',
    'kids_add_boy' => 'Menino',
    'kids_add_girl' => 'Menina',
    'kids_add_gender' => 'Gênero',
    'kids_add_firstname' => 'Primeiro nome',
    'kids_add_firstname_help' => 'Assumimos que o último nome é :name',
    'kids_add_probably' => 'Esta criança provavelmente é',
    'kids_add_probably_yo' => 'anos de idade',
    'kids_add_exact' => 'Conheço a data de nascimento exata dessa criança, que é',
    'kids_add_help' => 'Se você indicar uma data de nascimento exata para essa criança, criaremos um novo lembrete para você - então você será notificado todos os anos quando é hora de celebrar a data de nascimento desta criança.',
    'kids_add_cta' => 'Adicionar criança',
    'kids_edit_title' => 'Editar informações de :name',
    'kids_delete_confirmation' => 'Tem certeza de que deseja excluir esta criança? A exclusão é permanente',
    'kids_add_success' => 'A criança foi adicionada com sucesso',
    'kids_update_success' => 'A criança foi atualizada com sucesso',
    'kids_delete_success' => 'A criança foi excluída com sucesso',
    'kids_add_birthday_reminder' => 'Deseje um feliz aniversário para :name, pessoa importante de :contact_firstname',

    // tasks
    'tasks_desc' => 'Mantenha na linhas as coisas que você precisa para :name',
    'tasks_blank_title' => 'Parece que você não tem nenhuma tarefa para :name ainda',
    'tasks_blank_add_activity' => 'Adicionar tarefa',
    'tasks_add_title_page' => 'Adicionar uma tarefa para :name',
    'tasks_add_title' => 'Qual é a tarefa que você quer lembrar?',
    'tasks_add_optional_comment' => 'Comentário (Opcional)',
    'tasks_add_cta' => 'Adicionar tarefa',
    'tasks_add_success' => 'A tarefa foi adicionada com sucesso',
    'tasks_delete' => 'Deletar',
    'tasks_reactivate' => 'Reativar',
    'tasks_mark_complete' => 'Marque como completo',
    'tasks_add_task' => 'Adicionar uma tarefa',
    'tasks_added_on' => 'adicionado em :date',
    'tasks_delete_confirmation' => 'Você tem certeza de que deseja excluir esta tarefa?',
    'tasks_delete_success' => 'A tarefa foi excluída com sucesso',
    'tasks_complete_success' => 'O status da tarefa foi alterado com sucesso',

    // activities
    'activity_title' => 'Atividades',
    'activity_type_group_simple_activities' => 'Atividades simples',
    'activity_type_group_sport' => 'Esporte',
    'activity_type_group_food' => 'Comida',
    'activity_type_group_cultural_activities' => 'Atividades culturais',
    'activity_type_just_hanged_out' => 'apenas sai',
    'activity_type_watched_movie_at_home' => 'assisti um filme em casa',
    'activity_type_talked_at_home' => 'apenas fiquei em casa',
    'activity_type_did_sport_activities_together' => 'fizemos algum esporte juntos',
    'activity_type_ate_at_his_place' => 'comi na casa dele',
    'activity_type_ate_at_her_place' => 'comi na casa dela',
    'activity_type_went_bar' => 'fui para um bar',
    'activity_type_ate_at_home' => 'comi em casa',
    'activity_type_picknicked' => 'piquenique',
    'activity_type_went_theater' => 'fui a um teatro',
    'activity_type_went_concert' => 'fui a um concerto',
    'activity_type_went_play' => 'fui jogar',
    'activity_type_went_museum' => 'fui a um museu',
    'activity_type_ate_restaurant' => 'comi em um restaurante',
    'activities_add_activity' => 'Adicionar atividade',
    'activities_more_details' => 'Mais detalhes',
    'activities_hide_details' => 'Esconder detalhes',
    'activities_delete_confirmation' => 'Tem certeza de que deseja excluir esta atividade?',
    'activities_item_information' => ':Activity. Aconteceu em :date',
    'activities_add_title' => 'O que você fez com :name?',
    'activities_summary' => 'Descreva o que você fez',
    'activities_add_pick_activity' => '(Opcional) Gostaria de categorizar esta atividade? Você não precisa, mas isso lhe dará estatísticas mais tarde',
    'activities_add_date_occured' => 'Data em que ocorreu esta atividade',
    'activities_add_optional_comment' => 'Comentário opcional',
    'activities_add_cta' => 'Adicionar essa atividade',
    'activities_blank_title' => 'Acompanhe o que você fez com :name no passado, sobre o que você falou',
    'activities_blank_add_activity' => 'Adicionar uma atividade',
    'activities_add_success' => 'A atividade foi adicionada com sucesso',
    'activities_update_success' => 'A atividade foi atualizada com sucesso',
    'activities_delete_success' => 'A atividade foi excluída com sucesso',

    // notes
    'notes_add_success' => 'A nota foi adicionada com sucesso',
    'notes_edit_success' => 'The note has been saved successfully',
    'notes_delete_success' => 'A nota foi excluída com sucesso',
    'notes_add_title' => 'Adicione uma nota sobre :name',
    'notes_add_cta' => 'Adicionar nota',
    'notes_edit_title' => 'Edit note about :name',
    'notes_edit_cta' => 'Save note',
    'notes_written_on' => 'Escrito em :date',
    'notes_add_one_more' => 'Adicionar outra nota',
    'notes_title' => 'Notas',
    'notes_blank_link' => 'Adicionar uma nota',
    'notes_blank_name' => 'sobre :name',
    'notes_delete_confirmation' => 'Tem certeza de que deseja excluir esta anotação? A exclusão é permanente',

    // gifts
    'gifts_blank_title' => 'Gerencie suas idéias de presentes e as que você ofereceu :name',
    'gifts_blank_add_gift' => 'Adicione um presente',
    'gifts_add_success' => 'O presente foi adicionado com sucesso',
    'gifts_delete_success' => 'O presente foi excluído com sucesso',
    'gifts_delete_confirmation' => 'Tem certeza de que deseja excluir esse presente?',
    'gifts_add_gift' => 'Adicionar um presente',
    'gifts_link' => 'Ligar',
    'gifts_added_on' => 'Adicionado em :date',
    'gifts_delete_cta' => 'Deletar',
    'gifts_offered' => 'Oferecido',
    'gifts_add_title' => 'Gerenciamento de presentes para :name',
    'gifts_add_gift_idea' => 'Ideia de presente',
    'gifts_add_gift_already_offered' => 'Presente já oferecido',
    'gifts_add_gift_title' => 'O que é esse presente?',
    'gifts_add_link' => 'Ligar com o site (Opcional)',
    'gifts_add_value' => 'Valor (Opcional)',
    'gifts_add_comment' => 'Comentário (Opcional)',
    'gifts_add_someone' => 'Esse presente é pra alguem na família de :name',
    'gifts_add_cta' => 'Adicionar',
    'gifts_gift_idea' => 'Idéia de presente',
    'gifts_gift_already_offered' => 'Gifts already offered',
    'gifts_table_date_added' => 'Date added',
    'gifts_table_description' => 'Description',
    'gifts_table_actions' => 'Actions',

    // debts
    'debt_delete_confirmation' => 'Tem certeza de que deseja excluir esta dívida?',
    'debt_delete_success' => 'A dívida foi excluída com sucesso',
    'debt_add_success' => 'A dívida foi adicionada com sucesso',
    'debt_title' => 'Dívidas',
    'debt_add_cta' => 'Adicionar dívida',
    'debt_you_owe' => 'Você deve $:amount',
    'debt_they_owe' => ':name te deve $:amount',
    'debt_add_title' => 'Debt management',
    'debt_add_you_owe' => 'Você deve a :name',
    'debt_add_they_owe' => ':name te deve',
    'debt_add_amount' => 'a soma de',
    'debt_add_reason' => 'Pelo seguinte motivo (Opcional)',
    'debt_add_add_cta' => 'Adicionar dívida',
    'debt_edit_update_cta' => 'Update debt',
    'debt_edit_success' => 'The debt has been updated successfully',
    'debts_blank_title' => 'Manage debts you owe to :name or :name owes you'
];
