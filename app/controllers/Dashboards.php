

<?php

    class Dashboards extends Controller {

        private $dashboardModel;
        public function __construct() {
            $this->dashboardModel = $this->model('Dashboard');
        }

        public function statistique() {
            $products = $this->dashboardModel->getAllProduct();
            $categories = $this->dashboardModel->getAllCategorie();
            $clients = $this->dashboardModel->getAllClient();
            $orders = $this->dashboardModel->getAllOrder();

            $data = [
                'products_stats' => count($products),
                'categories_stats' => count($categories),
                'clients_stats' => count($clients),
                'orders_stats' => count($orders)
            ];

            $this->view('Dash/Statistique', $data);
        }

        public function products() {
            $products = $this->dashboardModel->getAllProduct();
            $data = [
                'products' => $products,
            ];
            $this->view('Dash/products', $data);
        }

        public function addProduct() {
            // check for post
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // sanitize post data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                // init data
                move_uploaded_file($_FILES['image']['tmp_name'], 'img/upload/' . $_FILES['image']['name']);

                $getCategoryByName = $this->dashboardModel->getCategoryByName($_POST['product_category']);
                $categories = $this->dashboardModel->getAllCategorie();

                $data = [
                    'reference' => trim($_POST['ref']),
                    'product_name' => trim($_POST['name']),
                    'bar_code' => trim($_POST['code_bar']),
                    'product_description' => trim($_POST['description']),
                    'retail_price' => floatval(trim($_POST['r_price'])),
                    'final_price' => floatval(trim($_POST['f_price'])),
                    'selling_price' => floatval(trim($_POST['s_price'])),
                    'product_quantity' => trim($_POST['product_quantity']),
                    'product_image' => trim($_FILES['image']['name']),
                    'category' => $getCategoryByName->id,
                    'reference_err' => '',
                    'product_name_err' => '',
                    'bar_code_err' => '',
                    'product_description_err' => '',
                    'retail_price_err' => '',
                    'final_price_err' => '',
                    'selling_price_err' => '',
                    'product_quantity_err' => '',
                    'product_image_err' => '',
                    'category_err' => ''
                ];
                // echo '<pre>';
                // var_dump($data);
                // echo '</pre>';
                // exit;

                // validate input
                if (empty($data['reference'])) {
                    $data['reference_err'] = 'Entre name of product reference';
                }
                if (empty($data['bar_code'])) {
                    $data['bar_code_err'] = 'Entre name of product code bar';
                }
                if (empty($data['product_name'])) {
                    $data['product_name_err'] = 'Entre name of product name';
                }
                if (empty($data['product_description'])) {
                    $data['product_description_err'] = 'Entre name of product description';
                }
                if (empty($data['retail_price'])) {
                    $data['retail_price_err'] = 'Entre name of product price';
                }
                if (empty($data['final_price'])) {
                    $data['final_price_err'] = 'Entre name of product price';
                }
                if (empty($data['selling_price'])) {
                    $data['selling_price_err'] = 'Entre name of product price';
                }
                if (empty($data['product_quantity'])) {
                    $data['product_quantity_err'] = 'Entre name of product quantity';
                }
                if (empty($data['product_image'])) {
                    $data['product_image_err'] = 'Entre name of product image';
                }

                // check if no error
                if (empty($data['reference_err']) && empty($data['product_image_err']) && empty($data['product_quantity_err']) && empty($data['retail_price_err']) && empty($data['final_price_err']) && empty($data['selling_price_err']) && empty($data['product_description_err']) && empty($data['product_name_err']) && empty($data['bar_code_err'])) {
                    $addPoruct = $this->dashboardModel->add($data);
                    if ($addPoruct) {
                        // redirect to product page
                        redirect('Dashboards/products');
                    } else {
                        die('ops');
                    }
                } else {
                    // load view page width error
                    $this->view('Dash/addProduct', $data);
                }

            } else {
                $categories = $this->dashboardModel->getAllCategorie();
                // init data
                $data = [
                    'categories' => $categories,
                    'reference' => '',
                    'product_name' => '',
                    'bar_code' => '',
                    'product_description' => '',
                    'retail_price' => '',
                    'final_price' => '',
                    'selling_price' => '',
                    'product_quantity' => '',
                    'product_image' => '',
                    'category' => '',
                    'reference_err' => '',
                    'product_name_err' => '',
                    'bar_code_err' => '',
                    'product_description_err' => '',
                    'retail_price_err' => '',
                    'final_price_err' => '',
                    'selling_price_err' => '',
                    'product_quantity_err' => '',
                    'product_image_err' => '',
                    'category_err' => ''
                ];

                $this->view('Dash/addProduct', $data);
            }
        }
/*
        public function deleteProduct($id) {
            // get response from data if deleted or not return true or false
            if ($this->productModel->delet($id)) {
                redirect('Dashboards/product');
            } else {
                die('ops');
            }
        }

        public function editProduct($id) {
            // check for post
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // process form
                $imgName = $_FILES['image']['name'];
                $imgTmp = $_FILES['image']['tmp_name'];
                move_uploaded_file($imgTmp, 'img/upload/' . $imgName);

                // get product id
                $productId = $this->productModel->getProductById($id);

                if (!empty($imgName)) {
                    // init data
                    $data = [
                        'id' => $productId->id,
                        'product_name' => trim($_POST['name']),
                        'product_price' => trim($_POST['price']),
                        'product_quantity' => trim($_POST['quantity']),
                        'product_description' => trim($_POST['description']),
                        'product_image' => trim($imgName),
                        'product_name_err' => '',
                        'product_price_err' => '',
                        'product_quantity_err' => '',
                        'product_description_err' => '',
                        'product_image_err' => ''
                    ];
                } else {
                    // init data without image
                    $data = [
                        'id' => $productId->id,
                        'product_name' => trim($_POST['name']),
                        'product_price' => trim($_POST['price']),
                        'product_quantity' => trim($_POST['quantity']),
                        'product_description' => trim($_POST['description']),
                        'product_image' => $productId->product_image,
                        'product_name_err' => '',
                        'product_price_err' => '',
                        'product_quantity_err' => '',
                        'product_description_err' => '',
                        'product_image_err' => ''
                    ];
                }

                // validate email
                if (empty($data['product_name'])) {
                    $data['product_name_err'] = 'Please enter product name';
                }
                // validate password
                if (empty($data['product_price'])) {
                    $data['product_price_err'] = 'Please enter product price';
                }
                // validate password
                if (empty($data['product_quantity'])) {
                    $data['product_quantity_err'] = 'Please enter product quantity';
                }
                // validate password
                if (empty($data['product_description'])) {
                    $data['product_description_err'] = 'Please enter product description';
                }

                // check if there is no erreur
                if (empty($data['product_name_err']) && empty($data['product_price_err']) && empty($data['product_quantity_err']) && empty($data['product_description_err'])) {
                    // check for validate email
                    $editProduct = $this->productModel->edit($data);

                    if ($editProduct) {
                        // redirect to product page
                        redirect('Dashboards/product');
                    } else {
                        die('ops');
                    }
                } else {
                    // load view page with error
                    $this->view('Dash/editProduct', $data);
                }


            } else {
                
                // get product id
                $productId = $this->productModel->getProductById($id);

                // init data
                $data = [
                    'id' => $productId->id,
                    'product_name' => $productId->product_name,
                    'product_price' =>  $productId->product_price,
                    'product_quantity' => $productId->product_quantity,
                    'product_description' => $productId->product_description,
                    'product_image' => $productId->product_image,
                    'product_name_err' => '',
                    'product_price_err' => '',
                    'product_quantity_err' => '',
                    'product_description_err' => '',
                    'product_image_err' => ''
                ];

                // load view
                $this->view('Dash/editProduct', $data);
            }
        }
        */
    }