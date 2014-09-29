<?php

class ProfilesController extends BaseController {

	public function update($id)
	{
		$profile = Profile::find($id);
		$profile->update([
			'name'		=> Input::get('name'),
			'about_me'	=> Input::get('about_me'),
			'twitter'	=> Input::get('twitter'),
			'facebook'	=> Input::get('facebook')
		]);

		Session::flash(
			'users.profile.update.success',
			"{$profile->user->username}'s profile has been successfully updated."
		);
		return Redirect::route('dashboard.users.index');
	}
	
}