<?php

namespace App\Admin\Controllers;

use App\Models\recruitments;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class RecruitmentController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Recruitments';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new recruitments());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(recruitments::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new recruitments());

        $form->text('name', __('Name'));
        $form->text('address', __('Address'));
        $form->text('phone', __('Phone'));
        $form->select('rexruitment_id', __('Recruitment'))->options(\App\Models\Recruitments::all()->pluck('name', 'id'));
        $form->text('workplace', __('Workplace'));
        $form->text('salary', __('Salary'));
        $form->text('note', __('Note'));
        $form->text('img_path', __('Img path'));
        $form->text('latitude', __('Latitude'));
        $form->text('longitude', __('Longitude'));

        return $form;
    }
}
