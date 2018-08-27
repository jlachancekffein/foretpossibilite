<?php 
use Cifq\Quiz\Models\Quiz;
class Cms5a34011bbde22434285204_78fcc0e0e9fbf2725061f7cdaab65e0aClass extends \Cms\Classes\PageCode
{
public function onStart()
{
    $this['slug'] = $this->param('slug');

    if($this->param('slug') == 'foret-quebecoise'){
        $wrapclass = 'foret-quebecoise';
    }elseif($this->param('slug') == 'foresterie'){
        $wrapclass = 'foresterie';
    }elseif($this->param('slug') == 'bois-ecolo'){
        $wrapclass = 'bois-ecolo';
    }elseif($this->param('slug') == 'quebec-forests'){
        $wrapclass = 'foret-quebecoise';
    }elseif($this->param('slug') == 'forestery'){
        $wrapclass = 'foresterie';
    }elseif($this->param('slug') == 'wood-ecological'){
        $wrapclass = 'bois-ecolo';
    }else{
        return Redirect::to('quiz');
    }

    $this['pageClass'] = 'page-quiz ' . $wrapclass;
}
public function onHandleForm()
{
    $data = [];
    $data['quiz'] = trim( input('quiz', '') );
    $data['result'] = trim( input('result', '') );
    $data['score'] = trim( input('score', '') );

    $result = new Quiz;
    $result->name = $data['quiz'];
    $result->result = $data['result'];
    $result->score = $data['score'];
    $result->save();
}
}
