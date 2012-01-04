class CreateAttributeClasses < ActiveRecord::Migration
  def change
    create_table :attribute_classes do |t|
      t.string :name

      t.timestamps
    end
  end
end
