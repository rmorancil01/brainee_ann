<?php

namespace backend\modules\contactus\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\contactus\models\Contactus;

/**
 * ContactusSearch represents the model behind the search form of `backend\modules\contactus\models\Contactus`.
 */
class ContactusSearch extends Contactus
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'social_id', 'geolocation_id'], 'integer'],
            [['school_id', 'school_address', 'school_contact', 'school_email', 'created_date', 'date_modified', 'status'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Contactus::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'social_id' => $this->social_id,
            'created_date' => $this->created_date,
            'date_modified' => $this->date_modified,
            'geolocation_id' => $this->geolocation_id,
        ]);

        $query->andFilterWhere(['like', 'school_id', $this->school_id])
            ->andFilterWhere(['like', 'school_address', $this->school_address])
            ->andFilterWhere(['like', 'school_contact', $this->school_contact])
            ->andFilterWhere(['like', 'school_email', $this->school_email])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
