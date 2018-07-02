<?php

namespace backend\modules\socialmedia\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\socialmedia\models\Socialmedia;

/**
 * SocialmediaSearch represents the model behind the search form of `backend\modules\socialmedia\models\Socialmedia`.
 */
class SocialmediaSearch extends Socialmedia
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['school_website', 'school_facebook', 'school_twitter', 'school_ig', 'created_date', 'date_modified', 'status'], 'safe'],
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
        $query = Socialmedia::find();

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
            'created_date' => $this->created_date,
            'date_modified' => $this->date_modified,
        ]);

        $query->andFilterWhere(['like', 'school_website', $this->school_website])
            ->andFilterWhere(['like', 'school_facebook', $this->school_facebook])
            ->andFilterWhere(['like', 'school_twitter', $this->school_twitter])
            ->andFilterWhere(['like', 'school_ig', $this->school_ig])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
