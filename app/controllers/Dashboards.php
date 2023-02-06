

<?php

    class Dashboards extends Controller {

        private $dashboardModel;
        public function __construct() {
            $this->dashboardModel = $this->model('Dashboard');
        }

        ///////////////////////////////////// statistique \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

        public function statistique() {
            $products = $this->dashboardModel->getAllProduct();
            $categories = $this->dashboardModel->getAllCategorie();
            $clients = $this->dashboardModel->getAllClient();
            $orders = $this->dashboardModel->getAllCommande();

            $data = [
                'products_stats' => count($products),
                'categories_stats' => count($categories),
                'clients_stats' => count($clients),
                'orders_stats' => count($orders)
            ];

            $this->view('Dash/Statistique', $data);
        }


        ///////////////////////////////////// product \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

        public function products() {
            $products = $this->dashboardModel->getAllProductAndCategory();
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

        public function deleteProduct($id) {
            // get response from data if deleted or not return true or false
            if ($this->dashboardModel->delet($id)) {
                redirect('Dashboards/products');
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

                $getCategoryByName = $this->dashboardModel->getCategoryByName($_POST['product_category']);
                // get product id
                $productId = $this->dashboardModel->getProductById($id);

                if (!empty($imgName)) {
                    // init data
                    $data = [
                        'id' => $productId->id_p,
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
                } else {
                    // init data without image
                    $data = [
                        'id' => $productId->id_p,
                        'reference' => trim($_POST['ref']),
                        'product_name' => trim($_POST['name']),
                        'bar_code' => trim($_POST['code_bar']),
                        'product_description' => trim($_POST['description']),
                        'retail_price' => floatval(trim($_POST['r_price'])),
                        'final_price' => floatval(trim($_POST['f_price'])),
                        'selling_price' => floatval(trim($_POST['s_price'])),
                        'product_quantity' => trim($_POST['product_quantity']),
                        'product_image' => $productId->image,
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
                }

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

                // check if no error
                if (empty($data['reference_err']) && empty($data['product_quantity_err']) && empty($data['retail_price_err']) && empty($data['final_price_err']) && empty($data['selling_price_err']) && empty($data['product_description_err']) && empty($data['product_name_err']) && empty($data['bar_code_err'])) {
                    $editProduct = $this->dashboardModel->edit($data);
                    if ($editProduct) {
                        // redirect to product page
                        redirect('Dashboards/products');
                    } else {
                        die('ops');
                    }
                } else {
                    // load view page width error
                    $this->view('Dash/editProduct', $data);
                }

            } else {
                $productCategory = $this->dashboardModel->getCategorieByProduct($id);
                $categories = $this->dashboardModel->getAllCategorie();
                // get product id
                $productId = $this->dashboardModel->getProductById($id);
                
                $data = [
                    'id' => $productId->id_p,
                    'categories' => $categories,
                    'reference' => $productId->reference,
                    'product_name' => $productId->libelle,
                    'bar_code' => $productId->bar_code,
                    'product_description' => $productId->description,
                    'retail_price' => $productId->retail_price,
                    'final_price' => $productId->final_price,
                    'selling_price' => $productId->selling_price,
                    'product_quantity' => $productId->quantity,
                    'product_image' => $productId->image,
                    'category' => $productCategory->name,
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

                // load view
                $this->view('Dash/editProduct', $data);
            }
        }


        ///////////////////////////////////// category \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

        public function category() {
            $category = $this->dashboardModel->getAllCategorie();
            $data = [
                'category' => $category,
            ];
            $this->view('Dash/Category', $data);
        }

        public function addCategory() {
            // check for post
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // sanitize post data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                // init data
                move_uploaded_file($_FILES['category_image']['tmp_name'], 'img/upload/' . $_FILES['category_image']['name']);

                $data = [
                    'category_name' => trim($_POST['name']),
                    'category_description' => trim($_POST['description']),
                    'category_image' => trim($_FILES['category_image']['name']),
                    'category_name_err' => '',
                    'category_description_err' => '',
                    'category_image_err'
                ];

                // validate input
                if (empty($data['category_name'])) {
                    $data['category_name_err'] = 'Entre name of category';
                }
                if (empty($data['category_description'])) {
                    $data['category_description_err'] = 'Entre description of category';
                }
                if (empty($data['category_image'])) {
                    $data['category_image_err'] = 'Entre image of category';
                }
                if ($this->dashboardModel->checkCategoryName($data['category_name'])) {
                    $data['category_name_err'] = 'this name already exist use another one';
                }

                // check if no error
                if (empty($data['category_name_err']) && empty($data['category_description_err']) && empty($data['category_image_err'])) {
                    $addCategory = $this->dashboardModel->addCategory($data);
                    if ($addCategory) {
                        // redirect to product page
                        redirect('Dashboards/Category');
                    } else {
                        die('ops');
                    }
                } else {
                    // load view page width error
                    $this->view('Dash/addCategory', $data);
                }

            } else {
                // init data
                $data = [
                    'category_name' => '',
                    'category_description' => '',
                    'category_image' => '',
                    'category_name_err' => '',
                    'category_description_err' => '',
                    'category_image_err' => ''
                ];

                $this->view('Dash/addCategory', $data);
            }
        }

        public function editCategory($id) {
            // check for post
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // sanitize post data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                // init data
                move_uploaded_file($_FILES['category_image']['tmp_name'], 'img/upload/' . $_FILES['category_image']['name']);
                // get category by id
                $category = $this->dashboardModel->getCategoryById($id);

                if (!empty($_FILES['category_image']['name'])) {
                    $data = [
                        'id' => $category->id,
                        'category_name' => trim($_POST['name']),
                        'category_description' => trim($_POST['description']),
                        'category_image' => trim($_FILES['category_image']['name']),
                        'category_name_err' => '',
                        'category_description_err' => '',
                        'category_image_err'
                    ];
                } else {
                    $data = [
                        'id' => $category->id,
                        'category_name' => trim($_POST['name']),
                        'category_description' => trim($_POST['description']),
                        'category_image' => $category->picture,
                        'category_name_err' => '',
                        'category_description_err' => '',
                        'category_image_err' => ''
                    ];
                }
                // print_r($data);
                // exit;
                // validate input
                if (empty($data['category_name'])) {
                    $data['category_name_err'] = 'Entre name of category';
                }
                if (empty($data['category_description'])) {
                    $data['category_description_err'] = 'Entre description of category';
                }

                // check if no error
                if (empty($data['category_name_err']) && empty($data['category_description_err'])) {
                    if ($this->dashboardModel->getCategoryByName($data['category_name'])) {
                        $data['category_name_err'] = 'this name already exist use another one';
                    } else {
                        $editCategory = $this->dashboardModel->editCategory($data);
                        if ($editCategory) {
                            // redirect to product page
                            redirect('Dashboards/Category');
                        } else {
                            die('ops');
                        }
                    }
                } else {
                    // load view page width error
                    $this->view('Dash/editCategory', $data);
                }

            } else {
                $category = $this->dashboardModel->getCategoryById($id);
                // init data
                $data = [
                    'id' => $category->id,
                    'category_name' => $category->name,
                    'category_description' => $category->category_description,
                    'category_image' => $category->picture,
                    'category_name_err' => '',
                    'category_description_err' => '',
                    'category_image_err' => ''
                ];

                $this->view('Dash/editCategory', $data);
            }
        }

        public function deleteCategory($id) {
            // get response from data if deleted or not return true or false
            if ($this->dashboardModel->deletCategory($id)) {
                redirect('Dashboards/Category');
            } else {
                die('ops');
            }
        }


        ///////////////////////////////////// Commandes \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

        public function Commandes() {
            $Commandes = $this->dashboardModel->getAllCommande();
            $data = [
                'Commandes' => $Commandes,
            ];
            $this->view('Dash/Commandes', $data);
        }

        public function acceptCommande($id) {
            $valide = $this->dashboardModel->accept($id);
            if ($valide) {
                redirect('/Dashboards/Commandes');
            }
        }
        public function refuseCommande($id) {
            $valide = $this->dashboardModel->refuse($id);
            if ($valide) {
                redirect('/Dashboards/Commandes');
            }
        }


        ///////////////////////////////////// Clients \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
        public function client() {
            $clients = $this->dashboardModel->getAllClient();
            $data = [
                'clients' => $clients,
            ];
            $this->view('Dash/Clients', $data);
        }


    }