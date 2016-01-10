<div class="details form">
    <h2><?php echo __('Site Details'); ?></h2>
    <br />
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title">All fields have validation rules</div>
        </div>
        <div class="panel-body">
            <?php
                echo $this->Form->create('Detail');

                echo $this->Form->input('id');

                echo $this->Form->input('email', array('class' => 'form-control', 'div' => array('class' => 'form-group'), 'label' => array('class' => 'control-label')));

                echo $this->Form->input('address', array('class' => 'form-control', 'div' => array('class' => 'form-group'), 'label' => array('class' => 'control-label')));
            ?>
                <script type="text/javascript">
                CKEDITOR.replace( 'DetailAddress',
                    {
                        fontSize_sizes : "30/30%;50/50%;75/75%;100/100%;120/120%;150/150%;200/200%;300/300%",
                        toolbar :
                        [
                            ['Link', 'Unlink'],
                            ['Bold', 'Italic','Underline'],
                            ['FontSize'],
                            ['TextColor'],
                            ['NumberedList','BulletedList'],
                            ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
                            ['Source']
                        ]       
                    }    
                );
                </script>
            <?php
                echo $this->Form->input('host', array('class' => 'form-control', 'div' => array('class' => 'form-group'), 'label' => array('class' => 'control-label')));

                echo $this->Form->input('username', array('class' => 'form-control', 'div' => array('class' => 'form-group'), 'label' => array('class' => 'control-label')));

                echo $this->Form->input('password', array('class' => 'form-control', 'div' => array('class' => 'form-group'), 'label' => array('class' => 'control-label')));

                echo $this->Form->input('port', array('class' => 'form-control', 'div' => array('class' => 'form-group'), 'label' => array('class' => 'control-label')));

                echo $this->Form->input('powered_by', array('class' => 'form-control', 'div' => array('class' => 'form-group'), 'label' => array('class' => 'control-label')));

                echo $this->Form->input('copyright', array('class' => 'form-control', 'div' => array('class' => 'form-group'), 'label' => array('class' => 'control-label')));

                $options = array(
                    'label' => 'Submit',
                    'class' => 'btn btn-success',
                    'div' => array(
                        'class' => 'form-group',
                    )
                );
                echo $this->Form->end($options);
            ?>
        </div>
    </div>
</div>

