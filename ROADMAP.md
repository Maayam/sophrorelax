# Besoin
=========

avoir une présence en ligne pour mon entreprse de sophro

as an admin, I want to:
	* create/modify a page
	* delete it
	* organize them: change order and nesting in menus
	* upload photos for my articles (handled by tinyMCE)

as a visitor, I want to:
	* leave a message
	* browse the website

# Entities
===========

	* User (only one user or two)
		* name
		* password
		* email
	* Page
		* name
		* content
		* user_id
		* page_id (parent page)
		* datePublished
		* dateModified
		* draft

# ROADMAP
=========

* build Landpage  /
	* visitor-base.html.twig (header/nav/footer with $menus, $content)
* Page Managment
	* Page Controller
		* Add Entity page      (IF ADMIN)  admin/page/add
			* panel admin with tiny MCE, form
				* Publish
				* Save as Draft
		* List Pages
			* admin_list(for admin panel)
				* View Drafts
				* View Published
				* modify
				* delete
				* send to drafts
			* client_list(for visitor)
		* View Page                        /{page.name}
			* standard website
		* Modify Entity Page   (IF ADMIN)  admin/page/edit/{id}
		* Delete Entity        (IF ADMIN)  admin/page/delete/{id}

* Users-admin
	* userController
	* Connection page
	* Lost password link
	* access to admin-panel

* Nested pages
	* Foreign key in Database
	* Update nav template with nice js for dropdown menus
	* adapted db query and layout when querying in admin_list and client_list
