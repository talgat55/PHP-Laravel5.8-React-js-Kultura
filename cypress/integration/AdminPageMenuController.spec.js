describe('Admin  page Menu ' , () => {
    it('Menu page index page ', () => {
        cy.visit('http://127.0.0.1:8000/admin/menus');
    });
    it('Menu page index page   link create new item work', () => {
        cy.visit('http://127.0.0.1:8000/admin/menus');
        cy.get('.card-header .btn').click();
    });


    it('Menu page  create new item menu  success ', () => {
        cy.visit('http://127.0.0.1:8000/admin/menus/create');
        cy.get('input[name=name]').type('Тестовое название');
        cy.get('input[name=link]').type('/test');
        cy.get('#create-menu-form').submit()
        // cy.get('header .feedback-link').click();
        // cy.get('.custom-modal-wrapper.active ');
    });
    it('Menu page  edit  item menu  success ', () => {
        cy.visit('http://127.0.0.1:8000/admin/menus/1/edit');
        cy.get('input[name=name]').type('Тестовое название');
        cy.get('input[name=link]').type('/test');
        cy.get('#edit-menu-form').submit()
        // cy.get('header .feedback-link').click();
        // cy.get('.custom-modal-wrapper.active ');
    });




});