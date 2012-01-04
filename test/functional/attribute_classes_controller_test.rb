require 'test_helper'

class AttributeClassesControllerTest < ActionController::TestCase
  setup do
    @attribute_class = attribute_classes(:one)
  end

  test "should get index" do
    get :index
    assert_response :success
    assert_not_nil assigns(:attribute_classes)
  end

  test "should get new" do
    get :new
    assert_response :success
  end

  test "should create attribute_class" do
    assert_difference('AttributeClass.count') do
      post :create, :attribute_class => @attribute_class.attributes
    end

    assert_redirected_to attribute_class_path(assigns(:attribute_class))
  end

  test "should show attribute_class" do
    get :show, :id => @attribute_class.to_param
    assert_response :success
  end

  test "should get edit" do
    get :edit, :id => @attribute_class.to_param
    assert_response :success
  end

  test "should update attribute_class" do
    put :update, :id => @attribute_class.to_param, :attribute_class => @attribute_class.attributes
    assert_redirected_to attribute_class_path(assigns(:attribute_class))
  end

  test "should destroy attribute_class" do
    assert_difference('AttributeClass.count', -1) do
      delete :destroy, :id => @attribute_class.to_param
    end

    assert_redirected_to attribute_classes_path
  end
end
