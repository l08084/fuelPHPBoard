<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.8
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2016 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Welcome extends Controller
{
	/**
	 * 掲示板画面を初期表示する
	 */
	public function action_index()
	{
        // 全投稿データを取得
        $data  = array();
        $data['posts'] = Model_Post::find('all');
        
        // 掲示板画面を表示(引数:投稿データ)
        return Response::forge(View::forge('welcome/index',$data));
	}

    /**
     * フォームの内容をDBに保存する
     */
    public function action_save()
    {
        // 投稿モデルのインスタンスを作成
        $post = Model_Post::forge();
        
        // フォームに入力した内容を投稿モデルに設定
        $post->user = Input::post('name');
        $post->message = Input::post('message');
        
        // 新規作成した投稿モデルをDBにInsert
        $post->save();
        
        // 掲示板画面を再表示
        Response::redirect('index.php/welcome/index');
    }
	
    /**
	 * The 404 action for the application.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_404()
	{
		return Response::forge(Presenter::forge('welcome/404'), 404);
	}
}
