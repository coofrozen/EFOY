<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('login/login_model');
    }
    /*
    *Showing  Login page here 
    */
    function index()
    {
        if ($this->session->userdata('is_logged_in') == True) {
            redirect('portal/main_exam');
        }
        $this->load->view('login/login');
    }

    function register()
    {
        if ($this->session->userdata('is_logged_in') == True) {
            redirect('portal/main_exam');
        }
        if ($this->session->userdata('staff_is_logged_in') == True) {
            redirect('home');
        }
        $this->load->view('login/register');
    }


    /**
     * check the username and the password with the database
     * @return void
     */

    function validate()
    {


        $username = $this->input->post('username');
        $password = sha1($this->input->post('password'));


        $is_valid = $this->login_model->validate($username, $password);


        if ($is_valid)/*If valid username and password set */ {
            $get_id = $this->login_model->get_id($username, $password);


            foreach ($get_id as $val) {
                $id = $val->id;
                $name = $val->username;
                $password = $val->password;
                $type = $val->type;
                $fullname = $val->name;
                $oracleid = $val->oracle_id;
                $phone = $val->phoneNo;
                $email = $val->email;
                $department = $val->department;
                $date_created = $val->date_created;
                $date_updated = $val->date_updated;
                $profile_pic = $val->photo;


                if ($type == 'Admin') {

                    $data = array(
                        'name' => $name,
                        'password' => $password,
                        'type' => $type,
                        'id' => $id,
                        'fullname' => $fullname,
                        'oracle_id' => $oracleid,
                        'phone' => $phone,
                        'email' => $email,
                        'department' => $department,
                        'date_created' => $date_created,
                        'date_updated' => $date_updated,
                        'photo' => $profile_pic,
                        'is_logged_in' => true
                    );

                    $this->session->set_userdata($data);
                    redirect('portal/main_exam');
                } 
            }
        } else // incorrect username or password
        {
            $this->session->set_flashdata('msg1', 'Credentials Incorrect!');
            redirect('login');
        }
    }

    /**
     * Unset the session, and logout the user.
     * @return void
     */
    public function logout()
    {


        $array_items = array(
            'name',
            'password',
            'type',
            'id',
            'fullname',
            'org_id',
            'email',
            'date_created',
            'date_updated',
            'pic',
            'is_logged_in',
        );



        $this->session->unset_userdata($array_items);
        $this->session->set_flashdata('msg1', 'You have Signed Out Now!');
        redirect('login');
    }
}
