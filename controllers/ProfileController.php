<?php

include_once './controllers/Controller.php';
include_once './models/User.php';

class ProfileController extends Controller
{
    public function index($id)
    {
        if (isset($_SESSION['user']) && $_SESSION['user']['id'] == $id) {
            $this->render('public.profile.index', ['id' => $id]);
        } else {
            $this->redirect('/');
        }
    }
    public function edit($id)
    {
        $profile = $this->model('user');
        $profile = $profile->find($id);

        if (isset($_SESSION['user']) && $_SESSION['user']['id'] == $id) {
            $this->render('public.profile.edit', ['id' => $id, 'profile' => $profile]);
        } else {
            $this->redirect('/');
        }
    }

    public function update($id)
    {
        $name = $_POST['name'] ?? null;
        $email = $_POST['email'] ?? null;
        $mobile = $_POST['mobile'] ?? null;
        $dob = $_POST['dob'] ?? null;

        $user = $this->model('user');
        $userData = $user->find($id);

        $userEmail = $user->findByEmail($email);

        if (!empty($userEmail) && $userData['email'] != $email) {
            $this->render('public.profile.edit', ['emailError' => 'Email Already Exist' , 'id' => $id, 'profile' => $userData]);
            exit;
        }
        

        $userMobile = $user->findByMobile($mobile);

        if(!empty($userMobile) && $userData['mobile'] != $mobile) {
            $this->render('public.profile.edit', ['mobileError' => 'Mobile Already Exist', 'id' => $id, 'profile' => $userData]);
            exit;
        }

        $errors = $this->validate([
            'name' => 'required|alphaSpace|min:3',
            'email' => 'required|email',
            'mobile' => 'required|phone',
            'dob' => 'required|date'
        ]);

        if (!empty($errors)) {
            $this->render('public.profile.edit', ['errors' => $errors, 'id' => $id, 'profile' => $userData]);
            exit;
        }

        $user->update($id,[
            'name' => $name,
            'email' => $email,
            'mobile' => $mobile,
            'date_of_birth' => $dob
        ]);

        $_SESSION['user']['name'] = $name;
        $_SESSION['user']['email'] = $email;
        
        $_SESSION['success_message'] = 'Profile updated successfully!';

        $this->redirect('/profile/'.$id);
    }
}