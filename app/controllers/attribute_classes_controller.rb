class AttributeClassesController < ApplicationController
  # GET /attribute_classes
  # GET /attribute_classes.json
  def index
    @attribute_classes = AttributeClass.all

    respond_to do |format|
      format.html # index.html.erb
      format.json { render :json => @attribute_classes }
    end
  end

  # GET /attribute_classes/1
  # GET /attribute_classes/1.json
  def show
    @attribute_class = AttributeClass.find(params[:id])

    respond_to do |format|
      format.html # show.html.erb
      format.json { render :json => @attribute_class }
    end
  end

  # GET /attribute_classes/new
  # GET /attribute_classes/new.json
  def new
    @attribute_class = AttributeClass.new

    respond_to do |format|
      format.html # new.html.erb
      format.json { render :json => @attribute_class }
    end
  end

  # GET /attribute_classes/1/edit
  def edit
    @attribute_class = AttributeClass.find(params[:id])
  end

  # POST /attribute_classes
  # POST /attribute_classes.json
  def create
    @attribute_class = AttributeClass.new(params[:attribute_class])

    respond_to do |format|
      if @attribute_class.save
        format.html { redirect_to @attribute_class, :notice => 'Attribute class was successfully created.' }
        format.json { render :json => @attribute_class, :status => :created, :location => @attribute_class }
      else
        format.html { render :action => "new" }
        format.json { render :json => @attribute_class.errors, :status => :unprocessable_entity }
      end
    end
  end

  # PUT /attribute_classes/1
  # PUT /attribute_classes/1.json
  def update
    @attribute_class = AttributeClass.find(params[:id])

    respond_to do |format|
      if @attribute_class.update_attributes(params[:attribute_class])
        format.html { redirect_to @attribute_class, :notice => 'Attribute class was successfully updated.' }
        format.json { head :ok }
      else
        format.html { render :action => "edit" }
        format.json { render :json => @attribute_class.errors, :status => :unprocessable_entity }
      end
    end
  end

  # DELETE /attribute_classes/1
  # DELETE /attribute_classes/1.json
  def destroy
    @attribute_class = AttributeClass.find(params[:id])
    @attribute_class.destroy

    respond_to do |format|
      format.html { redirect_to attribute_classes_url }
      format.json { head :ok }
    end
  end
end
