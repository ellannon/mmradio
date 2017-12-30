<?php

namespace App;

trait PageTemplates
{
    /*
    |--------------------------------------------------------------------------
    | Page Templates for Backpack\PageManager
    |--------------------------------------------------------------------------
    |
    | Each page template has its own method, that define what fields should show up using the Backpack\CRUD API.
    | Use snake_case for naming and PageManager will make sure it looks pretty in the create/update form
    | template dropdown.
    |
    | Any fields defined here will show up after the standard page fields:
    | - select template
    | - page name (only seen by admins)
    | - page title
    | - page slug
    */

    private function home()
    {
      $this->crud->addField([   // CustomHTML
                      'name' => 'metas_separator',
                      'type' => 'custom_html',
                      'value' => '<br><h2>Metas</h2><hr>',
                  ]);
      $this->crud->addField([
                      'name' => 'meta_title',
                      'label' => 'Meta Title',
                      'fake' => true,
                      'store_in' => 'extras',
                  ]);
      $this->crud->addField([
                      'name' => 'meta_description',
                      'label' => 'Meta Description',
                      'fake' => true,
                      'store_in' => 'extras',
                  ]);
      $this->crud->addField([
                      'name' => 'meta_keywords',
                      'type' => 'textarea',
                      'label' => 'Meta Keywords',
                      'fake' => true,
                      'store_in' => 'extras',
                  ]);
      $this->crud->addField([   // CustomHTML
                      'name' => 'content_separator',
                      'type' => 'custom_html',
                      'value' => '<br><h2>Content</h2><hr>',
                  ]);
      $this->crud->addField([
                      'name' => 'content',
                      'label' => 'Content',
                      'type' => 'wysiwyg',
                      'placeholder' => 'Your content here',
                  ]);
    }
    private function quienes_somos()
    {
      $this->crud->addField([   // CustomHTML
                      'name' => 'metas_separator',
                      'type' => 'custom_html',
                      'value' => '<br><h2>Metas</h2><hr>',
                  ]);
      $this->crud->addField([
                      'name' => 'meta_title',
                      'label' => 'Meta Title',
                      'fake' => true,
                      'store_in' => 'extras',
                  ]);
      $this->crud->addField([
                      'name' => 'meta_description',
                      'label' => 'Meta Description',
                      'fake' => true,
                      'store_in' => 'extras',
                  ]);
      $this->crud->addField([
                      'name' => 'meta_keywords',
                      'type' => 'textarea',
                      'label' => 'Meta Keywords',
                      'fake' => true,
                      'store_in' => 'extras',
                  ]);
      $this->crud->addField([   // CustomHTML
                      'name' => 'content_separator',
                      'type' => 'custom_html',
                      'value' => '<br><h2>Content</h2><hr>',
                  ]);
      $this->crud->addField([
                      'name' => 'content',
                      'label' => 'Content',
                      'type' => 'wysiwyg',
                      'placeholder' => 'Your content here',
                  ]);
    }
    private function mmr_a_la_carta()
    {
      $this->crud->addField([   // CustomHTML
                      'name' => 'metas_separator',
                      'type' => 'custom_html',
                      'value' => '<br><h2>Metas</h2><hr>',
                  ]);
      $this->crud->addField([
                      'name' => 'meta_title',
                      'label' => 'Meta Title',
                      'fake' => true,
                      'store_in' => 'extras',
                  ]);
      $this->crud->addField([
                      'name' => 'meta_description',
                      'label' => 'Meta Description',
                      'fake' => true,
                      'store_in' => 'extras',
                  ]);
      $this->crud->addField([
                      'name' => 'meta_keywords',
                      'type' => 'textarea',
                      'label' => 'Meta Keywords',
                      'fake' => true,
                      'store_in' => 'extras',
                  ]);
      $this->crud->addField([   // CustomHTML
                      'name' => 'content_separator',
                      'type' => 'custom_html',
                      'value' => '<br><h2>Content</h2><hr>',
                  ]);
      $this->crud->addField([
                      'name' => 'content',
                      'label' => 'Content',
                      'type' => 'wysiwyg',
                      'placeholder' => 'Your content here',
                  ]);
    }
    private function programacion()
    {
      $this->crud->addField([   // CustomHTML
                      'name' => 'metas_separator',
                      'type' => 'custom_html',
                      'value' => '<br><h2>Metas</h2><hr>',
                  ]);
      $this->crud->addField([
                      'name' => 'meta_title',
                      'label' => 'Meta Title',
                      'fake' => true,
                      'store_in' => 'extras',
                  ]);
      $this->crud->addField([
                      'name' => 'meta_description',
                      'label' => 'Meta Description',
                      'fake' => true,
                      'store_in' => 'extras',
                  ]);
      $this->crud->addField([
                      'name' => 'meta_keywords',
                      'type' => 'textarea',
                      'label' => 'Meta Keywords',
                      'fake' => true,
                      'store_in' => 'extras',
                  ]);
      $this->crud->addField([   // CustomHTML
                      'name' => 'content_separator',
                      'type' => 'custom_html',
                      'value' => '<br><h2>Content</h2><hr>',
                  ]);
      $this->crud->addField([
                      'name' => 'content',
                      'label' => 'Content',
                      'type' => 'wysiwyg',
                      'placeholder' => 'Your content here',
                  ]);
    }
    private function contactanos()
    {
      $this->crud->addField([   // CustomHTML
                      'name' => 'metas_separator',
                      'type' => 'custom_html',
                      'value' => '<br><h2>Metas</h2><hr>',
                  ]);
      $this->crud->addField([
                      'name' => 'meta_title',
                      'label' => 'Meta Title',
                      'fake' => true,
                      'store_in' => 'extras',
                  ]);
      $this->crud->addField([
                      'name' => 'meta_description',
                      'label' => 'Meta Description',
                      'fake' => true,
                      'store_in' => 'extras',
                  ]);
      $this->crud->addField([
                      'name' => 'meta_keywords',
                      'type' => 'textarea',
                      'label' => 'Meta Keywords',
                      'fake' => true,
                      'store_in' => 'extras',
                  ]);
      $this->crud->addField([   // CustomHTML
                      'name' => 'content_separator',
                      'type' => 'custom_html',
                      'value' => '<br><h2>Content</h2><hr>',
                  ]);
      $this->crud->addField([
                      'name' => 'content',
                      'label' => 'Content',
                      'type' => 'wysiwyg',
                      'placeholder' => 'Your content here',
                  ]);
    }
    private function apps_de_descarga()
    {
      $this->crud->addField([   // CustomHTML
                      'name' => 'metas_separator',
                      'type' => 'custom_html',
                      'value' => '<br><h2>Metas</h2><hr>',
                  ]);
      $this->crud->addField([
                      'name' => 'meta_title',
                      'label' => 'Meta Title',
                      'fake' => true,
                      'store_in' => 'extras',
                  ]);
      $this->crud->addField([
                      'name' => 'meta_description',
                      'label' => 'Meta Description',
                      'fake' => true,
                      'store_in' => 'extras',
                  ]);
      $this->crud->addField([
                      'name' => 'meta_keywords',
                      'type' => 'textarea',
                      'label' => 'Meta Keywords',
                      'fake' => true,
                      'store_in' => 'extras',
                  ]);
      $this->crud->addField([   // CustomHTML
                      'name' => 'content_separator',
                      'type' => 'custom_html',
                      'value' => '<br><h2>Content</h2><hr>',
                  ]);
      $this->crud->addField([
                      'name' => 'content',
                      'label' => 'Content',
                      'type' => 'wysiwyg',
                      'placeholder' => 'Your content here',
                  ]);
    }
    private function red_de_emisoras_fm()
    {
      $this->crud->addField([   // CustomHTML
                      'name' => 'metas_separator',
                      'type' => 'custom_html',
                      'value' => '<br><h2>Metas</h2><hr>',
                  ]);
      $this->crud->addField([
                      'name' => 'meta_title',
                      'label' => 'Meta Title',
                      'fake' => true,
                      'store_in' => 'extras',
                  ]);
      $this->crud->addField([
                      'name' => 'meta_description',
                      'label' => 'Meta Description',
                      'fake' => true,
                      'store_in' => 'extras',
                  ]);
      $this->crud->addField([
                      'name' => 'meta_keywords',
                      'type' => 'textarea',
                      'label' => 'Meta Keywords',
                      'fake' => true,
                      'store_in' => 'extras',
                  ]);
      $this->crud->addField([   // CustomHTML
                      'name' => 'content_separator',
                      'type' => 'custom_html',
                      'value' => '<br><h2>Content</h2><hr>',
                  ]);
      $this->crud->addField([
                      'name' => 'content',
                      'label' => 'Content',
                      'type' => 'wysiwyg',
                      'placeholder' => 'Your content here',
                  ]);
    }
    private function colabora_con_mmradio()
    {
      $this->crud->addField([   // CustomHTML
                      'name' => 'metas_separator',
                      'type' => 'custom_html',
                      'value' => '<br><h2>Metas</h2><hr>',
                  ]);
      $this->crud->addField([
                      'name' => 'meta_title',
                      'label' => 'Meta Title',
                      'fake' => true,
                      'store_in' => 'extras',
                  ]);
      $this->crud->addField([
                      'name' => 'meta_description',
                      'label' => 'Meta Description',
                      'fake' => true,
                      'store_in' => 'extras',
                  ]);
      $this->crud->addField([
                      'name' => 'meta_keywords',
                      'type' => 'textarea',
                      'label' => 'Meta Keywords',
                      'fake' => true,
                      'store_in' => 'extras',
                  ]);
      $this->crud->addField([   // CustomHTML
                      'name' => 'content_separator',
                      'type' => 'custom_html',
                      'value' => '<br><h2>Content</h2><hr>',
                  ]);
      $this->crud->addField([
                      'name' => 'content',
                      'label' => 'Content',
                      'type' => 'wysiwyg',
                      'placeholder' => 'Your content here',
                  ]);
    }
}
