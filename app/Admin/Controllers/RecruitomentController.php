<?php

namespace App\Admin\Controllers;

use App\Models\Recruit;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class RecruitController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'recruit';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Recruit());

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
        $show = new Show(Recruit::findOrFail($id));

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
        $form = new Form(new Recruit());

        $form->text('name', __('Name'));
        $form->text('address', __('Address'));
        $form->text('phone', __('Phone'));
        $form->select('recruitoment_id', __('Recruitoment'))->options(\App\Models\Recruitoment::all()->pluck('name', 'id'));
        $form->text('workplace', __('Workplace'));
        $form->text('salary', __('Salary'));
        $form->text('note', __('Note'));
        $form->image('img_path', __('Img path'));->move('recruit_image')->uniqueName();
        $form->text('latitude', __('Latitude'));
        $form->text('longitude', __('Longitude'));

        return $form;
    }
}