<?php

function micilini_customizer($wp_customize){

    //Painel Principal da WP-MICILINI
    $wp_customize->add_panel(
        'panel_wpmicilini', 
        array(
            'priority' => 1,
             'title' => '(WP-Micilini) Configurações do Tema',
            'description' => 'Edite aqui todas as configurações relacionadas ao tema wp-micilini.'
        ) 
    );

    //Seção de Cabeçalho
    $wp_customize->add_section(
        'section_cabecalho',
        array(
            'priority' => 1,
            'title' => 'Cabeçalho da Página',
            'description' => 'Edite aqui os blocos de cabeçalho da página.',
            'panel' => 'panel_wpmicilini'
        )
    );

    /* Controles do Cabeçalho */

    $wp_customize->add_setting(
        'setting_customlogo',
        array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'absint'
        )
    );
       
    $wp_customize->add_control(
        new WP_Customize_Media_Control(
            $wp_customize, 
            'controle_customlogo', 
            array(
                'label' => 'Logo do Cabeçalho',
                'description' => 'Faça upload da logo do seu cabeçalho abaixo:',
                'section' => 'section_cabecalho',
                'settings' => 'setting_customlogo',
                'mime_type' => 'image'
            )
        )
    );

    $wp_customize->add_setting(
        'setting_customheightlogo',
        array(
            'type' => 'theme_mod',
            'default' => '55',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        'setting_customheightlogo',
        array(
            'label' => 'Tamanho da Logo',
            'description' => 'Insira o tamanho da sua logo em pixels. O ideal é 55.',
            'section' => 'section_cabecalho',
            'settings' => 'setting_customheightlogo',
            'type' => 'number'
        )
    );

    $wp_customize->add_setting(
        'setting_customheadercolor',
        array(
            'type' => 'theme_mod',
            'default' => '#333333',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );
       
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'setting_customheadercolor', 
            array(
                'label' => 'Cor do Cabeçalho',
                'description' => 'Escolha uma cor para o cabeçalho da página.',
                'section' => 'section_cabecalho',
                'settings' => 'setting_customheadercolor'
            )
        )
    );

    /* / Controles do Cabeçalho */

    //Seção de Rodapé
    $wp_customize->add_section(
        'section_rodape',
        array(
            'priority' => 3,
            'title' => 'Rodapé da Página',
            'description' => 'Edite aqui os blocos do rodapé da página.',
            'panel' => 'panel_wpmicilini'
        )
    );

    /* Controles do Rodapé */

    $wp_customize->add_setting(
        'setting_customcopyright',
        array(
            'type' => 'theme_mod',
            'default' => '2023 - 2024 | WP-Micilini, feito com ❤️ pelo &nbsp;<a href="#home">Portal da Micilini</a>',
            'sanitize_callback' => 'wp_kses'
        )
    );

    $wp_customize->add_control(
        'setting_customcopyright',
        array(
            'label' => 'Texto de Copyright',
            'description' => 'Insira as informações de copyright no rodapé. Aceita HTML.',
            'section' => 'section_rodape',
            'settings' => 'setting_customcopyright',
            'type' => 'textarea'
        )
    );

    $wp_customize->add_setting(
        'setting_customcopylogo',
        array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'absint'
        )
    );
       
    $wp_customize->add_control(
        new WP_Customize_Media_Control(
            $wp_customize, 
            'setting_customcopylogo', 
            array(
                'label' => 'Logo do Rodapé',
                'description' => 'Faça upload da logo do seu rodapé abaixo:',
                'section' => 'section_rodape',
                'settings' => 'setting_customcopylogo',
                'mime_type' => 'image'
            )
        )
    );

    $wp_customize->add_setting(
        'setting_customheightcopylogo',
        array(
            'type' => 'theme_mod',
            'default' => '40',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        'setting_customheightcopylogo',
        array(
            'label' => 'Tamanho da Logo do Rodapé',
            'description' => 'Insira o tamanho da sua logo em pixels. O ideal é 40.',
            'section' => 'section_rodape',
            'settings' => 'setting_customheightcopylogo',
            'type' => 'number'
        )
    );

    $wp_customize->add_setting(
        'setting_customfootercolor',
        array(
            'type' => 'theme_mod',
            'default' => '#333333',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );
       
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'setting_customfootercolor', 
            array(
                'label' => 'Cor do Rodapé',
                'description' => 'Escolha uma cor para o rodapé da página.',
                'section' => 'section_rodape',
                'settings' => 'setting_customfootercolor'
            )
        )
    );

    /* / Controles do Rodapé */

    //Seção de Home Section
    $wp_customize->add_section(
        'section_home',
        array(
            'priority' => 2,
            'title' => 'Seção Home',
            'description' => 'Edite aqui os textos da seção de Home.',
            'panel' => 'panel_wpmicilini'
        )
    );

    /* Controles da Seção de Home */

    $wp_customize->add_setting(
        'setting_customtitle',
        array(
            'type' => 'theme_mod',
            'default' => 'Diga <span style="color:#e67e22;">Olá</span> para a <br><span style="color:#3498db;">WP-Micilini</span> 😝',
            'sanitize_callback' => 'wp_kses'
        )
    );

    $wp_customize->add_control(
        'setting_customtitle',
        array(
            'label' => 'Título',
            'description' => 'Insira o título do Home. Aceita HTML.',
            'section' => 'section_home',
            'settings' => 'setting_customtitle',
            'type' => 'textarea'
        )
    );

    $wp_customize->add_setting(
        'setting_customdescription',
        array(
            'type' => 'theme_mod',
            'default' => 'Um tema simples para blogs, feito com muito carinho pelo Portal da Micilini.',
            'sanitize_callback' => 'wp_kses'
        )
    );

    $wp_customize->add_control(
        'setting_customdescription',
        array(
            'label' => 'Descrição',
            'description' => 'Insira a descrição do Home. Aceita HTML.',
            'section' => 'section_home',
            'settings' => 'setting_customdescription',
            'type' => 'textarea'
        )
    );

    $wp_customize->add_setting(
        'setting_customlinktitle',
        array(
            'type' => 'theme_mod',
            'default' => 'Acessar Portal',
            'sanitize_callback' => 'esc_html'
        )
    );

    $wp_customize->add_control(
        'setting_customlinktitle',
        array(
            'label' => 'Texto do Botão',
            'description' => 'Insira o texto do botão de ação.',
            'section' => 'section_home',
            'settings' => 'setting_customlinktitle',
            'type' => 'text'
        )
    );

    $wp_customize->add_setting(
        'setting_customlinkurl',
        array(
            'type' => 'theme_mod',
            'default' => 'https://micilini.com',
            'sanitize_callback' => 'esc_url'
        )
    );

    $wp_customize->add_control(
        'setting_customlinkurl',
        array(
            'label' => 'Link do Botão',
            'description' => 'Insira a URL do botão de ação.',
            'section' => 'section_home',
            'settings' => 'setting_customlinkurl',
            'type' => 'url'
        )
    );

    $wp_customize->add_setting(
        'setting_customlinktarget',
        array(
            'type' => 'theme_mod',
            'default' => '_blank',
            'sanitize_callback' => 'sanitize_key'
        )
    );
       
    $wp_customize->add_control(
        'setting_customlinktarget',
        array(
            'label' => "Abertura do Link",
            'description' => 'Selecione a forma como o link será aberto:',
            'section' => 'section_home',
            'type' => 'select',
            'choices' => 
                array(
                    '_blank' => '_blank',
                    '_self' => '_self',
                    '_parent' => '_parent',
                    '_top' => '_top',
                ),
        )
    );

    $wp_customize->add_setting(
        'setting_customhomeimage',
        array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'absint'
        )
    );
       
    $wp_customize->add_control(
        new WP_Customize_Media_Control(
            $wp_customize, 
            'setting_customhomeimage', 
            array(
                'label' => 'Imagem de Capa',
                'description' => 'Faça o upload da imagem de capa. Recomendável 700x500 pixels.',
                'section' => 'section_home',
                'settings' => 'setting_customhomeimage',
                'mime_type' => 'image'
            )
        )
    );

    /* / Controles da Seção de Home */

    //Seção de Paginação
    $wp_customize->add_section(
        'section_paginacao',
        array(
            'priority' => 4,
            'title' => '[Recurso] Paginação',
            'description' => 'Faça a edição dos recursos de paginação do site.',
            'panel' => 'panel_wpmicilini'
        )
    );

    /* Controle Paginação */

    $wp_customize->add_setting(
        'setting_custompagbackgroundcolor',
        array(
            'type' => 'theme_mod',
            'default' => '#E0DBE0',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );
       
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'setting_custompagbackgroundcolor', 
            array(
                'label' => 'Cor de fundo da paginação',
                'description' => 'Escolha uma cor de fundo para os blocos da paginação',
                'section' => 'section_paginacao',
                'settings' => 'setting_custompagbackgroundcolor'
            )
        )
    );

    $wp_customize->add_setting(
        'setting_custompagcolor',
        array(
            'type' => 'theme_mod',
            'default' => '#222222',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );
       
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'setting_custompagcolor', 
            array(
                'label' => 'Cor do Texto',
                'description' => 'Escolha uma cor para os textos da paginação',
                'section' => 'section_paginacao',
                'settings' => 'setting_custompagcolor'
            )
        )
    );

    $wp_customize->add_setting(
        'setting_custompagbackgroundcolorselected',
        array(
            'type' => 'theme_mod',
            'default' => '#4e4e4e',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );
       
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'setting_custompagbackgroundcolorselected', 
            array(
                'label' => 'Cor do Selecionado',
                'description' => 'Escolha uma cor de fundo para o bloco selecionado da paginação.',
                'section' => 'section_paginacao',
                'settings' => 'setting_custompagbackgroundcolorselected'
            )
        )
    );

    /* / Controle Paginação */



}

add_action('customize_register', 'micilini_customizer');