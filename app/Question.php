<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['title','body','slug','user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function setTitleAttribute($value){
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = str_slug($value); 
    }
    public function getUrlAttribute(){
        return route('questions.show', $this->slug);
     }
    public function getCreatedDateAttribute(){
        return $this->created_at->diffForHumans();
    }

    public function getStatusAttribute(){
        if($this->answers >0){
            if($this->best_answer_is){
                return 'answered-accepted';
            }
            return 'answered';
        }
        return 'unanswered';
    }
    
}
