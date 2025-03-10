<div class="container">
  <div class="row">

    <div class="col-md-6">
      <h2>Sistem Perusahaan Weecom</h2>
      <h3>Pengelolaan Karyawan & Digital Absensi</h3>

      <div class="akses-button">
        <?php

        $data_anchor = ['class' => 'btn btn-outline-primary'];

        echo anchor('user/login', 'LOGIN', $data_anchor);
        echo anchor('user/register', 'REGISTER', $data_anchor);

        ?>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card frame-form-weecom">
        <div class="card-header">Login</div>

        <div class="card-body">

        <?php if($this->session->flashdata('pesan')): ?>
          <div class="alert alert-success"><?php echo $this->session->flashdata('pesan'); ?></div>
        <?php endif; ?>

          <?php

          $form_weecom = ['class' => 'form-weecom'];
          echo form_open(base_url('user/prosesLogin'), $form_weecom);

          // echo validation_errors();

          ?>

          <div class="form-group row">
            <label for="email" class="col-3">Email</label>
            <div class="col-9">
              <?php

              $data = [
                'name' => 'email',
                'id' => 'email',
                'class' => 'form-control',
                'value' => set_value('email'),
                'placeholder' => 'Email'
              ];
              echo form_input($data);
              echo form_error('email');

              ?>
            </div>
          </div>

          <div class="form-group row">
            <label for="password" class="col-3">Password</label>
            <div class="col-9">
              <?php

              $data = [
                'name' => 'password',
                'id' => 'password',
                'class' => 'form-control',
                'placeholder' => 'Password'
              ];
              echo form_password($data);
              echo form_error('password');

              ?>
            </div>
          </div>

          <?php

          echo form_submit(['name' => 'submit', 'class' => 'btn btn-dark btn-block'], 'Login');

          echo form_close();

          ?>

        </div>
      </div>
    </div>

  </div>
</div>